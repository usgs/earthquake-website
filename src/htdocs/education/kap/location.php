<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Repeat Photography: Determining the Camera&rsquo;s Location';
  $NAVIGATION = true;
  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<figure class="right" style="max-width: 500px">
  <a href="img/src/fieldofview.pdf"><img src="img/fieldofview.png" width="500" alt="Map showing the shooting locations and lens field of view" /></a>
  <figcaption>Map showing the optimal shooting locations for both cameras. A red line is drawn over Market St. and extends into the bay, depicting the ideal vantage points for obtaining a similar composition. Based on the field of view of each lens (Hasselblad: 94&deg;, blue line; Nikon: 138&deg;, green line), we determined the GPS coordinates that would allow us to capture the entire peninsula as well as the view looking down Market St. from the Ferry Building, just as Lawrence did 100 years ago.</figcaption>
</figure>

<p>In typcial repeat photography, it&rsquo;s possible to compare the original photo to the camera&rsquo;s viewfinder and shift the camera to obtain a similar view. Because our camera was <a href="./">suspended from a kite</a>, we didn&rsquo;t have the luxury of looking through the viewfinder to compose. Instead, we had to rely on computer software to pinpoint the location in advance.</p>

<h2>Camera Position</h2>

<p>Although it&rsquo;s possible to determine exactly where George Lawrence positioned his camera 100 years ago, it would not be sufficient because we were not using the same camera and lens. George Lawrence took his photo using a 19-inch lens and a huge, 22&#8221; x ~55&#8221; negative, which yielded a field of view (FOV) of approximately 145&deg;. We took the contemporary photo using two different cameras:</p>
<ul>
  <li>Hasselblad XPan II 35mm film-based panoramic camera with a 30mm lens (94&deg; <acronym title="field of view">FOV</acronym>)</li>
  <li>Nikon D70s 6-megapixel digital <acronym title="Single Lens Reflex">SLR</acronym> camera with a 10.5mm fisheye lens (138&deg; <acronym title="field of view">FOV</acronym>)</li>
</ul>
<p>One of the defining characteristics of <a href="./sf-in-ruins/">Lawrence&rsquo;s photo</a> is that his camera was positioned so that the Ferry Building was lined up perfectly with Market St. Our aim was to capture this same vantage point. While it&rsquo;s fairly straightforward to key in GPS coordinates and position the boat on top of the shooting location, we had the additional challenge of estimating the camera&rsquo;s location, which was several hundred feet away from the boat, hanging from a kite. Malcolm Johnston, USGS scientist and boat captain, lined it up perfectly, putting the camera in the correct position.</p>

<h2>Camera Height</h2>

<figure style="max-width: 600px;" class="left">
  <img src="img/height.png" width="600" alt="3d model of San Francisco showing the height of G. Lawrence's camera" />
  <figcaption>We determined that Lawrence&rsquo;s camera was positioned approximately 290 meters (950 feet) above San Francisco Bay.</figcaption>
</figure>

<p>Using a 3D visualization application called ArcScene from <acronym title="Environment Systems Research Institute">ESRI</acronym>, we determined the height at which Lawrence snapped his photo 100 years ago. We loaded a digital elevation model (DEM) of San Francisco, and positioned the 3D model in a similar vantage point, using common features in both the model and orginal photo. Once we had the model oriented correctly, the software revealed the height: almost 1000 feet above the surface.</p>

<p>One of our biggest challenges would be getting the camera high enough. Lawrence did not have to concern himself with <acronym title="Federal Aviation Administration">FAA</acronym> regulations or air traffic in 1906. With two international airports nearby, we made the decision not to fly the kite over 500 feet to avoid any potential problems. Because the kite flies at varying angles and the camera was attached to the kite line 50-100 feet below the kite, our modern photo was taken at a height of 300&ndash;350 feet above the bay.</p>
