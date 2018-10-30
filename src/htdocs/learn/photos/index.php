<?php
//  Author:  Tiffany Kalin
// Contact: Lisa Wald
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Earthquake Photo Collections';
  $NAVIGATION  = true;
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include  'template.inc.php';
}
?>
<div class="row">
  <div class="column three-of-five">
    <h2>Specific Earthquakes</h2>
    <ul class="no-style linklist">
      <li>
        <a>
          <img class="thumb" src="images/1906SanFrancisco.gif" alt="1906 san fran earthquake"/>
          <a href="1906sanfrancisco.php">1906 San Francisco</a>
        </a>
        <p>
          <a href="http://www.sfmuseum.org/">San Francisco Museum</a>
        </p>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/1933LongBeach.jpg" alt="1933 long beach earthquake"/>
          <a href="1933longbeach.php">1933 Long Beach</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/1989LomaPrieta.jpg" alt="1989 loma prieta earthquake"/>
          <a href="1989lomaprieta.php">1989 Loma Prieta</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/1994NorthridgeCA.jpg" alt="1994 northridge earthquake"/>
            <a href="1994northridge.php">1994 Northridge</a>
        </a>
        <p>
          <a href="http://www.data.scec.org/significant/northridge1994.html">Southern California Earthquake Data Center</a>
        </p>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/1999HectorMine.jpg" alt="1999 hector mine earthquake"/>
          <a href="1999hectormine.php">1999 Hector Mine</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/1999izmitTurkey.jpg" alt="1999 izmit earthquake"/>
        </a>
        <a href="1999izmitturkey.php">1999 Izmit Turkey</a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2002Denalifault.jpg" alt="2002 denali earthquake"/>
          <a href="2002denali.php">2002 Denali</a>
        </a>
        <p>
          <br />
            <a href="http://www.dggs.alaska.gov/?menu_link=engineering&link=denali_fault">Alaska Division of Geological &amp; Geophysical Surveys</a><br />
            <a href="http://www.aeic.alaska.edu/Denali_Fault_2002/#Photos">AK Earthquake Information Center &amp; Univ. of Alaska</a>
        </p>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2008SichuanChina.jpeg" alt="2008 sichuan earthquake"/>
          <a href="2008sichuanchina.php">2008 Sichuan China</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2010Haiti.jpeg" alt="2010 haiti earthquake"/>
          <a href="2010haiti.php">2010 Haiti</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2011Virginia.jpeg" alt="2011 virginia earthquake"/>
          <a href="2011virginia.php">2011 Virginia</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2013LushanChina.jpg" alt="2013 lushan earthquake"/>
          <a href="2013lushanchina.php">2013 Lushan China</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2014SouthNapa.jpeg" alt="2014 napa earthquake"/>
          <a href="2014southnapa.php">2014 South Napa</a>
        </a>
      </li>
      <li>
        <a>
          <img class="thumb"src="images/2016NewZealand.jpg" alt="2014 napa earthquake"/>
          <a href="2016newzealand.php">2016 New Zealand</a>
        </a>
    </ul>
  </div>

  <div class="column three-of-five">
    <h2>USGS Collections</h2>
    <ul>
      <li><a href="https://pubs.usgs.gov/dds/dds-29/">The October 17, 1989, Loma Prieta, California, Earthquake—Selected Photographs</a> (Digital Data Series DDS-29)</li>
    </ul>

    <h2>Non-USGS Collections</h2>
    <ul id="nonusgs">
      <li><a href="https://www.americangeosciences.org/center-for-geo/ern/image-collections/earth-science-world-image-bank" target="_blank">American Geological Institute (AGI) Earth Science World ImageBank</a></li>
      <li><a href="https://nisee.berkeley.edu/elibrary/">Earthquake Engineering Online Archive</a></li>
      <li><a href="http://www.johnmartin.com/earthquakes/eqshow/index.htm" target="_blank">Earthquake Images from John Martin &amp; Associates</a> (many from NOAA collection)</li>
      <li><a href="https://www.fema.gov/media-library" target="_blank">FEMA Photo Library</a></li>
      <li><a href="http://www.iris.edu/gallery3/" target="_blank">IRIS Image Gallery</a></li>
      <li><a href="http://memory.loc.gov/ammem/index.html" target="_blank">Library of Congress American Memory</a></li>
      <li><a href="https://www.ngdc.noaa.gov/hazardimages/" target="_blank">NOAA Natural Hazards Image Database</a></li>
      <li><a href="http://www.data.scec.org/significant/northridge1994.html" target="_blank">Northridge Earthquake</a></li>
      <li><a href="http://photo2.si.edu/" target="_blank">Smithsonian Photographs Online</a></li>
      <li><a href="http://www.sfmuseum.org/" target="_blank">The Museum of the City of San Francisco</a> Bay area earthquake damage</li>
      <li><a href="http://www.oac.cdlib.org/search?query=earthquake" target="_blank">UC Berkeley California Heritage Collection</a></li>
      <li><a href="https://ussc.utah.gov/pages/themes.php">Utah Seismic Safety Commission</a> - 1971 San Fernando, CA, 1994 Northridge, CA, and 2008 Wells, NV earthquakes</li>
      <li><a href="https://geodata.geology.utah.gov">Utah Geological Survey GeoData Archive System</a></li>
    </ul>

    <h2>See Also</h2>
    <ul>
      <li><a href="http://gallery.usgs.gov/">USGS Multimedia Gallery</a> Images, videos, and audio</li>
      <li><a href="http://library.usgs.gov/photo/#/">USGS Photographic Library</a - search for &quot;earthquake&quot;></li>
    </ul>
  </div>
</div>
