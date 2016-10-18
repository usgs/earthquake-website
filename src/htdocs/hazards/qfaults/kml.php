<?php
// Author: Lisa Wald
// Contact: Kathy Haller
  if (!isset($TEMPLATE)) {
    $TITLE = 'Quaternary Fault and Fold Database of the United States';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<div class='row'>
  <div class='column three-of-five'>
    <h2>KML Files</h2>

    <p>
      Faults are classified by age of last known movement.<br/>
      <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/Quaternaryall.zip">
        Download  all 5 layers as a ZIP file
      </a>.
    </p>

    <ul class='nostyle linklist'>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/Historic.kmz">
        <h4>Historic</h4>
        <img src="images/historic.jpg" alt="Google Earth icon"/></a>
        <p>Most recent, known movement less than about 150 years</p>
      </li>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/Holocene_LatestPleistocene.kmz">
        <h4>Holocene to Latest Pleistocene</h4>
        <img src="images/holocene.jpg" alt="Google Earth icon" /></a>
        <p>Younger than 15,000 years</a></p>
      </li>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/LateQuaternary.kmz">
        <h4>Late Quaternary</h4>
        <img src="images/latequaternary.jpg" alt="Google Earth icon"/></a>
        <p>Younger than 130,000 years</a></p>
      </li>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/Mid_LateQuaternary.kmz">
        <h4>Mid to Late Quaternary</h4>
        <img src="images/midtolatequaternary.jpg" alt="Google Earth icon"/></a>
        <p>Younger than 750,000 years</a></p>
      </li>
      <li>
        <a href="ftp://hazards.cr.usgs.gov/web/nshm/qfaults/Quaternary.kmz">
        <h4>Quaternary</h4>
        <img src="images/quaternary.jpg" alt="Google Earth icon"/></a>
        <p>Younger than 1,600,000 years</a></p>
      </li>
    </ul>
  </div>

  <div class='column two-of-five'>

    <h3>Tips</h3>
    <ul>
      <li>Faults are colored coded for age category.</li>
      <li>As you hover the cursor over a fault, it's name will appear in the same color as the fault.</li>
      <li>If you click on the fault, a text box will open and you can click a link for the database of information about that fault. </li>
      <li>Sometimes it takes two clicks to get the text box to open.</li>
    </ul>
    <p>
      You can also access a fault through the Google Earth table
      of contents. Open the folder for the correct age, find the
      fault name in the list, and double click the name. Google Earth
      will &quot;fly&quot; to the fault you selected.
    </p>

    <h3>Disclaimer</h3>
    <p>
      Google Earth software enables you to zoom in beyond the level of accuracy provided in these data layers. Fault traces are depicted at their mapped location on the surface. Most faults dip one way or another at depth, and their location must be modeled or inferred from geologic evidence. Fault dip information is included for each fault within the application.
    </p>
  </div>
</div>
