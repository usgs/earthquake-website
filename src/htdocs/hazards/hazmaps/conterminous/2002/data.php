<?php
  // Author: Lisa Wald
  // Contact:
  if (!isset($TEMPLATE)) {
    $TITLE = '2002 U.S. Hazard Data';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
  $ftp = '/static/lfs/nshm/conterminous/2002/data';
?>


<div class="row">
  <div class="column three-of-five">
    <h2>Gridded Data</h2>
    <p>
      Gridded data files are presented in two formats, text and binary. Both
      formats for a given file contain the same information. The text file is
      white-space delimited and can easily be imported into a spreadsheet
      application (eg. Microsoft Excel&trade;) for further analysis. The binary
      format is more useful for programatic access from custom software.
    </p>

    <table>
      <thead>
        <tr>
          <th scope="col">File Contents</th>
          <th scope="col">Spectral Acceleration</th>
          <th scope="col">Return Period</th>
          <th scope="col">Downloads</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">Peak Ground Acceleration</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.txt.gz" title="8 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.bin.gz" title="15 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">Peak Ground Acceleration</td>
          <td class="pe">10&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.10pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.10pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">Peak Ground Acceleration</td>
          <td class="pe">2&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.2pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.pga.2pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">0.1 Second (10Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p10.txt.gz" title="7 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p10.bin.gz" title="15 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">0.2 Second (5Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.txt.gz" title="7 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.bin.gz" title="15 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">0.2 Second (5Hz)</td>
          <td class="pe">10&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.10pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.10pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">0.2 Second (5Hz)</td>
          <td class="pe">2&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.2pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p20.2pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">0.3 Second (3.33Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p33.txt.gz" title="8 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p33.bin.gz" title="16 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">0.5 Second (2Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p50.txt.gz" title="8 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.0p50.bin.gz" title="16 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">1.0 Second (1Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.txt.gz" title="8 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.bin.gz" title="17 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">1.0 Second (1Hz)</td>
          <td class="pe">10&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.10pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.10pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Ground Motion</td>
          <td class="sa">1.0 Second (1Hz)</td>
          <td class="pe">2&#37; in 50 Years</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.2pc50.txt.gz" title="3 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.1p00.2pc50.bin.gz" title="2 Mb">BINARY</a>
          ]</td>
        </tr>
        <tr>
          <td class="type">Hazard Curves</td>
          <td class="sa">2.0 Second (0.5Hz)</td>
          <td class="pe">Not Applicable</td>
          <td class="downloads">[
            <a href="<?php echo $ftp; ?>/downloads/2002.US.2p00.txt.gz" title="8 Mb">TEXT</a> |
            <a href="<?php echo $ftp; ?>/downloads/2002.US.2p00.bin.gz" title="16 Mb">BINARY</a>
          ]</td>
        </tr>
      </tbody>
    </table>

    <h3>File Formats</h3>

    <h4>Text File Formats</h4>
    <p>
      These files are simple white-space delimited files. The format should be
      farily easy to decipher without much guidance.
    </p>

    <h4>Binary File Formats</h4>
    <p>
      These files were created from the text files and have the same format. In
      order to help with programatic reading of these files there is additional
      header information at the top of these files. Header information contains:
    </p>

    <ul>
      <li>
        FileType (int)<br/>
        0 &rarr; Hazard Curve File<br/>
        1 &rarr; Ground Motion File<br/>
      </li>
      <li>Minimum Latitude (double)</li>
      <li>Maximum Latitude (double)</li>
      <li>Minimum Longitude (double)</li>
      <li>Maximum Longitude (double)</li>
      <li>
        Grid Spacing (double) - The decimal degree increment between adjacent
        latitudes/longitudes
      </li>
      <li>
        Num Curve Points (int) - The number of points per hazard curve. This
        value is only present in hazard curve files.
      </li>
    </ul>

    <p>
      For convenience we provide sample binary file readers for potential
      developers to examine the source and get a better idea of how to read the
      file format. <a href="<?php echo $ftp; ?>/USParser.jar">Download our reader</a>
      (requires <a target="_blank" href="https://www.java.com">Java</a>&trade;).
      To use this application, open a command line terminal and type:
      <code>java -jar USParser.jar &lt;datafile&gt;</code>.
  </div>

  <div class="column two-of-five">
    <h2>Catalog Data</h2>
    <p>
      In addition to the output data files below we also make available to you
      the catalog data used when performing our analysis.
    </p>

    <ul>
      <li><a href="<?php echo $ftp; ?>/catalogs/wmm2001.txt">Western U.S. Moment Magnitude Catalog</a></li>
      <li><a href="<?php echo $ftp; ?>/catalogs/emb2001.txt">Central and Eastern U.S. Bodywave Magnitude Catalog</a></li>
    </ul>

    <h3>Cautionary Note</h3>
    <p>
      We understand why you might be interested in obtaining these catalog
      files, but are concerned that they might be misused. We have merged
      catalogs from several different sources, and used fairly subjective
      criteria to rank our preferences. We have used simple, automated schemes
      to compute magnitudes and remove aftershocks. To the extent that the
      original catalogs are not valid research tools, neither are ours! Please
      read the accompanying documentation, and ask whether these catalogs suit
      your purpose.
    </p>

    <h3>Column Definitions</h3>
    <p>
      Each file contains white-space delimited ASCII data organized into the
      following columns:
    </p>

    <ol>
      <li>Magnitude (mb for CEUS, Mw for WUS)</li>
      <li>Longitude (decimal degrees, east)</li>
      <li>Latitude (decimal degrees, north)</li>
      <li>Depth (km)</li>
      <li>Year</li>
      <li>Month</li>
      <li>Day</li>
      <li>Hour</li>
      <li>Minute</li>
      <li>Second</li>
      <li>Name of source catalog</li>
    </ol>
  </div>
</div>
