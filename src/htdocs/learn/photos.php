<?php
//  Author:  Tiffany Kalin
// Contact: Lisa Wald
if  (!isset($TEMPLATE))  {
  $TITLE  =  'Earthquake Photo Collections';
  $NAVIGATION  = true;
  include  'template.inc.php';
}
?>

<p class='alert info'>
  The USGS Earthquake Photos in the Multimedia Gallery have been moved into a new database, and all the URLs changed. We'll restore all the links to the earthquake photos as soon as we can determine all the new URLs.
</p>

<!-- These links are all broken.
<div class="row">
  <div class="column three-of-five">
    <h2>Specific Earthquakes</h2>
    <ul class="no-style linklist">
      <li>
        <a>
          <h4><font color="black">1906 San Francisco</font></h4>
          <img src="images/1906SanFran.jpg" alt="1906 san fran earthquake"/>
        </a>
        <p>
          <a href="/regional/nca/1906/18april/photos.php">US Geological Survey</a><br />
          <a href="http://www.sfmuseum.org/">San Francisco Museum</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">1933 Long Beach</font></h4>
          <img src="images/1933LongBeach.jpg" alt="1933 long beach earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/1933_Long_Beach_Earthquake">U.S. Geological Survey</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">1989 Loma Prieta</font></h4>
          <img src="images/1989LomaPrieta.jpg" alt="1989 loma prieta earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/1989_Loma_Prieta,_California_Earthquake">U.S. Geological Survey</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">1994 Northridge</font></h4>
          <img src="images/1994Northridge.gif" alt="1994 northridge earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/1994_Northridge_CA_Earthquake">US Geological Survey</a><br /><a href="http://www.data.scec.org/significant/northridge1994.html">Southern California Earthquake Data Center</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">1999 Hector Mine</font></h4>
          <img src="images/1999HectorMine.jpg" alt="1999 hector mine earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/1999_Hector_Mine_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">1999 Izmit Turkey</font></h4>
          <img src="images/1999Izmit.jpg" alt="1999 izmit earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/1999_Izmit,_Turkey_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2002 Denali</font></h4>
          <img src="images/2002Denali.jpg" alt="2002 denali earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2002_Denali_Fault_Earthquake">USGS Gallery</a><br />
          <a href="http://www.dggs.alaska.gov/?menu_link=engineering&link=denali_fault">Alaska Division of Geological &amp; Geophysical Surveys</a><br />
          <a href="http://www.aeic.alaska.edu/Denali_Fault_2002/#Photos">AK Earthquake Information Center &amp; Univ. of Alaska</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2008 Sichuan China</font></h4>
          <img src="images/2008Sichuan.jpg" alt="2008 sichuan earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2008_Sichuan_China_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2010 Haiti</font></h4>
          <img src="images/2010Haiti.jpg" alt="2010 haiti earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2010_Haiti_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2011 Virginia</font></h4>
          <img src="images/2011Virginia.jpg" alt="2011 virginia earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2011_Virginia_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2013 Lushan China</font></h4>
          <img src="images/2013Lushan.jpg" alt="2013 lushan earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2013_Lushan_China_Earthquake">USGS Gallery</a>
        </p>
      </li>
      <li>
        <a>
          <h4><font color="black">2014 South Napa</font></h4>
          <img src="images/2014Napa.jpg" alt="2014 napa earthquake"/>
        </a>
        <p>
          <a href="http://gallery.usgs.gov/sets/2014_South_Napa_CA">USGS Gallery</a>
        </p>
      </li>
    </ul>
  </div>
-->

  <div class="column three-of-five">
    <h2>Non-USGS Collections</h2>
    <ul id="nonusgs">
      <li><a href="http://www.earthscienceworld.org/imagebank/" target="_blank">American Geological Institute (AGI) Earth Science World ImageBank</a></li>
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
    </ul>

    <h2>See Also</h2>
    <ul>
      <li><a href="http://gallery.usgs.gov/">USGS Multimedia Gallery</a> Images, videos, and audio</li>
      <li><a href="http://library.usgs.gov/photo/#/">USGS Photographic Library</a - search for &quot;earthquake&quot;></li>
    </ul>
  </div>
</div>
