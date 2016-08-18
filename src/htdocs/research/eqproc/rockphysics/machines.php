<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
    if (!isset($TEMPLATE)) {
      $TITLE = 'Rock Physics Labs';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="../index.css"/>
      ';
        include 'template.inc.php';
    }
?>

<h2>Test Apparatus</h2>

<h3>Triaxial Machines</h3>

<table>
	<tr>
		<th>Machine</th>
    <th>Axial Stress (MPa)</th>
    <th>Pc (MPa)</th>
    <th>Pp (MPa)</th>
    <th>Temp (&deg;C)</th>
    <th>Displacement Rate (&micro;m/s)</th>
    <th>Sample Dimensions</th>
	</tr>
	<tr>
		<td>1</td>
    <td>1100</td>
    <td>500</td>
    <td>200</td>
    <td>Can add</td>
    <td>.001 to 50</td>
    <td>3&rdquo;</td>
	</tr>
	<tr>
		<td>2</td>
    <td>None</td>
    <td>500</td>
    <td>200</td>
    <td>Can add</td>
    <td>.001 to 50</td>
    <td>3&rdquo;</td>
	</tr>
	<tr>
		<td>3</td>
    <td>1800</td>
    <td>700</td>
    <td>200</td>
    <td>600</td>
    <td>.001 to 20</td>
    <td>1&rdquo;</td>
	</tr>
	<tr>
		<td>4</td>
    <td>1800</td>
    <td>600</td>
    <td>200</td>
    <td>600</td>
    <td>.001 to 20</td>
    <td>1.5&rdquo;</td>
	</tr>
	<tr>
		<td>5</td>
    <td>1800</td>
    <td>700</td>
    <td>200</td>
    <td>600</td>
    <td>.001 to 20</td>
    <td>1&rdquo;</td>
	</tr>
</table>

<h3>Other Machines</h3>

<table>
	<tr>
		<th>Machine</th>
    <th>Normal Stress (MPa)</th>
    <th>Displacement Rate</th>
    <th>Shear Loading Rate</th>
    <th>Sample</th>
	</tr>
	<tr>
		<td>Rotary</td>
    <td>0.4</td>
    <td>1 &micro;m/s to 1 m/s</td>
    <td></td>
    <td>15&rdquo;</td>
	</tr>
	<tr>
		<td>Direct Shear</td>
    <td>150</td>
    <td>.001 to 1000 &micro;m/s</td>
    <td></td>
    <td>3&rdquo;</td>
	</tr>
	<tr>
		<td>2 meter press</td>
    <td>8</td>
    <td></td>
    <td>.00001 to .01 MPa/s</td>
    <td>1.5 x 1.5 m</td>
	</tr>
</table>

<h3>Photos</h3>

<div class='row'>
  <div class='column one-of-four'>
    <figure>
      <a href="images/machine1.jpg">
        <img src="images/tn-machine1.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Machine 1</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/machine2.jpg">
        <img src="images/tn-machine2.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Machine 2</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/machine3.jpg">
        <img src="images/tn-machine3.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Machine 3</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/machine4.jpg">
        <img src="images/tn-machine4.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Machine 4</figcaption>
    </figure>
  </div>
</div>
<div class='row'>
  <div class='column one-of-four'>
    <figure>
      <a href="images/machine5.jpg">
        <img src="images/tn-machine5.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Machine 5</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/rotary.jpg">
        <img src="images/tn-rotary.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Rotary Machine</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/direct-shear.jpg">
        <img src="images/tn-direct-shear.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>Direct Shear</figcaption>
    </figure>
  </div>
  <div class='column one-of-four'>
    <figure>
      <a href="images/2m-press.jpg">
        <img src="images/2m-press.jpg" alt="thumbnail photo" title="click to view a larger image"/>
      </a>
      <figcaption>2-M Press</figcaption>
    </figure>
  </div>
</div>
