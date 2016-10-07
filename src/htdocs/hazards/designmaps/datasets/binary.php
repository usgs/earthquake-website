<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "Binary Data File Formats";
    // $STYLES = "
    //   #main ol li {margin:8px 0;list-style-position:inside;}
    //   #main div {
    //     border-style:solid;
    //     border-color:#CCCCCC;
    //     border-width:1px 0 0 1px;
    //     padding:1em;
    //     margin:10px;
    //   }
    //   #main div h2 { margin:5px; }
    //   #main div span:after { content: ' -- '; }
    // ";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<a href="index.php">View Data Files</a>
<p>
  Binary files are provided for programatic access of data in an efficient
  manner. However it is important you understand the format of the binary file
  before attempting to read data. Pease read the section below that corresponds
  to the type of file you wish to download. For your convenience we also
  provide some sample source code (written in Java) for you to download to see
  how to properly read the binary files. See each section below to download the
  correct source code for that file type, or <a href="inc/parsers.zip"
  >download them all right here</a>. Some important facts to keep in mind if
  you choose to write your own parser.
</p>
<ol>
  <li>
    Some of the binary files will require you to swap the byte order of their
    data. This is because the files were originally created on a machine with
    a processor that uses the reverse byte order of your own. Since we don't
    know which processor you have we can not tell you which files you will
    need to swap the byte order with and which you do not.
  </li>
  <li>
    Some files contain binary &ldquo;short&rdquo; values which are two bytes
    long. After finishing reading a particular record from the binary file you
    must then skip two bytes in order to be on the proper &ldquo;word
    boundary&rdquo; to start reading data for the next record.
  </li>
  <li>
    File formats that specify the &ldquo;numvals&rdquo; are indicating the
    number of valid values to expect to find for the particular record,
    however the file format will actually always allocate the full number of
    bytes for that file format so you may need to skip aditional, invalid data
    before reaching the next record in the data file. For example, all the
    Hazard Curve files allocate 20 * 4 = 80 bytes of y-value data following
    the &ldquo;numvals&rdquo; value. However often times only 18 or 19 of
    those values will contain actual data. So after reading 18 or 19 float
    values (whatever is specified by numvals) out of the file you will need
    to advance your file pointer 2 or 1 additional bytes before the next
    record will start.
  </li>
</ol>

<div><a name="design"></a>
  <h2>Design Ground Motions</h2>
  <p>
    These files contain S<sub>S</sub> and S<sub>1</sub> ground motion data
    (corresponding to the 0.2 second and 1.0 second periods respectively). The
    basic format of the binary file is as follows:
  </p>
  <pre><?php print htmlspecialchars(
      '<recnum><latitude><longitude><numvals><Ss><S1>'
    );
  ?></pre>
  <p>Where</p>
  <ul>
    <li>
      <strong>recnum</strong> :
      <span>4-Byte Integer</span>
      Just an index identifying the record number in the file.
    </li>
    <li>
      <strong>latitude</strong> :
      <span>4-Byte Floating Point Number</span>
      Specifies the geographic latitude of the location.
    </li>
    <li>
      <strong>longitude</strong> :
      <span>4-Byte Floating Point Number</span>
      Specifies the geographic longitude of the location.
    </li>
    <li>
      <strong>numvals</strong> :
      <span>2-Byte Short Integer</span>
      Specifies the number of valid values in this record. Generally for this
      file type there are always two (2) values. Names, the S<sub>S</sub> and
      S<sub>1</sub>.
    </li>
    <li>
      <strong>S<sub>S</sub></strong> :
      <span>4-Byte Floating Point Number</span>
      The value of the short period (0.2 second) ground motion at this
      location.
    </li>
    <li>
      <strong>S<sub>1</sub></strong> :
      <span>4-Byte Floating Point Number</span>
      The value of the 1.0 second ground motion at this location.
    </li>
  </ul>
  <a href="inc/QuickMCEReader.java">Download example parser for this format</a>
</div>

<div><a name="retrofit"></a>
  <h2>Design Retrofit</h2>
  <p>See <a href="#design">Design Ground Motions</a></p>
</div>

<div><a name="hazcurves"></a>
  <h2>Hazard Curves</h2>
  <p>
    These files contain hazard curve data for gridded locations. One of the
    first lines in the data file will specify a latitude and longitude of 0.0
    each. This line specifies the X-values each hazard curve contained in that
    file. Each subsequent line contains the Y-values for the corresponding
    latitude/longitude specified on that line. The files are formatted as
    follows:
  </p>
  <pre><?php
    print htmlspecialchars(
      '<recnum><latitude><longitude><period><numvals><yval_1><yval_2>' .
      '...<yval_numvals>'
    );
  ?></pre>
  <p>Where</p>
  <ul>
    <li>
      <strong>recnum</strong> :
      <span>4-Byte Integer</span>
      Just an index identifying the record number in the file.
    </li>
    <li>
      <strong>latitude</strong> :
      <span>4-Byte Floating Point Number</span>
      Specifies the geographic latitude of the location.
    </li>
    <li>
      <strong>longitude</strong> :
      <span>4-Byte Floating Point Number</span>
      Specifies the geographic longitude of the location.
    </li>
    <li>
      <strong>period</strong> :
      <span>4-Byte Floating Point Number</span>
      The spectral period for which this curve is defined. This is specified
      in seconds and 0.0 indicates PGA.
    </li>
    <li>
      <strong>numvals</strong> :
      <span>2-Byte Short Integer</span>
      The number of valid values in this record. This number is less than or
      equal to 20 and if it is less than 20 you must skip 4 * (20 - numVals)
      bytes before reading the next record.
    </li>
    <li>
      <strong>yval_N</strong> :
      <span>4-Byte Floating Point Number</span>
      The annual frequency of exceeding the correspnding ground motion
      (specified at the top of the file).
    </li>
  </ul>
  <a href="inc/QuickHazReader.java">Download example parser for this format</a>
</div>

<div><a name="uhs"></a>
  <h2>Uniform Hazard Spectra</h2>
  <p>
    These files contain uniform hazard spectra for gridded locations. One of
    the first lines in the data file will specify a latitude and longitude of
    0.0 each. This line specifies the X-values each spectra contained in that
    file. Each subsequent line contains the Y-values for the corresponding
    latitude/longitude specified on that line. The files are formatted as
    follows:
  </p>
  <pre><?php
    print htmlspecialchars(
      '<recnum><latitude><longitude><fex><numvals><yval_1><yval_2>' .
      '...<yval_numvals>'
    );
  ?></pre>
  <p>Where</p>
  <ul>
    <li>
      <strong>recnum</strong> :
      <span>4-Byte Integer</span>
      Just an index specifying the record number in this file.
    </li>
    <li>
      <strong>latitude</strong> :
      <span>4-Byte Floating Point Number</span>
      The geographic latitude for this location.
    </li>
    <li>
      <strong>longitude</strong> :
      <span>4-Byte Floating Point Number</span>
      The geographic longitude for this locaiton.
    </li>
    <li>
      <strong>fex</strong> :
      <span>4-Byte Floating Point Number</span>
      The frequency of exceedance for this spectrum.
    </li>
    <li>
      <strong>numvals</strong> :
      <span>2-Byte Short Integer</span>
      The number of values in this spectrum record. This number is less than
      or equal to 7 and if it is less than 7 you must skip 4 * (7 - numvals)
      bytes before reading the next record.
    </li>
    <li>
      <strong>yval_N</strong> :
      <span>4-Byte Floating Point Number</span>
      The UHS value correspnoding to the X-value specified at the top of the
      file.
    </li>
  </ul>
  <a href="inc/QuickUHSReader.java">Download example parser for this format</a>
</div>

<div><a name="zip"></a>
  <h2>Zip Code Data Files</h2>
  <p>
    These files contain ground motion data for zip codes. Ground motion data
    is reported for the each of the zip code centroid, maximum value, and
    minimum value. These files are formatted as follows:
  </p>
  <pre><?php
    print htmlspecialchars(
      '<zipcode><type><latitude><longitude><cen_ss><cen_s1><max_ss>' .
      '<max_s1><min_ss><min_s1>'
    );
  ?></pre>
  <p>Where</p>
  <ul>
    <li>
      <strong>zipcode</strong> :
      <span>4-Byte Integer</span>
      An integer representation of a 5-digit zip code. If the number read is
      less than 5-digits it should be left-padded with zeroes to become a
      5-digit zip code.
    </li>
    <li>
      <strong>type</strong> :
      <span>4-Byte Integer</span>
      A type-code such that: 0 -&gt; Area, 1 -&gt; Point. Where an area is a
      regular zip code and a point indicates a single point that was given
      its own zip code (generally a post office).
    </li>
    <li>
      <strong>latitude</strong> :
      <span>4-Byte Floating Point Number</span>
      The geographic latitude for this location.
    </li>
    <li>
      <strong>longitude</strong> :
      <span>4-Byte Floating Point Number</span>
      The geographic longitude for this location.
    </li>
    <li>
      <strong>cen_ss</strong> :
      <span>4-Byte Floating Point Number</span>
      The centroid S<sub>S</sub> ground motion value.
    </li>
    <li>
      <strong>cen_s1</strong> :
      <span>4-Byte Short Integer</span>
      The centroid S<sub>1</sub> ground motion value.
    </li>
    <li>
      <strong>max_ss</strong> :
      <span>4-Byte Floating Point Number</span>
      The maximum S<sub>S</sub> ground motion value in this zip code.
    </li>
    <li>
      <strong>max_s1</strong> :
      <span>4-Byte Short Integer</span>
      The maximum S<sub>1</sub> ground motion value in this zip code.
    </li>
    <li>
      <strong>min_ss</strong> :
      <span>4-Byte Floating Point Number</span>
      The minimum S<sub>S</sub> ground motion value in this zip code.
    </li>
    <li>
      <strong>min_s1</strong> :
      <span>4-Byte Short Integer</span>
      The minimum S<sub>1</sub> ground motion value in this zip code.
    </li>
  </ul>
  <a href="inc/BinSpit.java">Download example parser for this format</a>
</div>
