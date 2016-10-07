<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "U.S. Seismic Design Maps";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<form action="/designmaps/us/application.php">
  <input type="submit" value="Use the Application">
</form>
<br/>
  <table class="tabular">
    <tr>
      <th>Purpose:</th>
      <td>
        Retrieve seismic design parameter values for the design of buildings
        and bridges at sites in the U.S. and its Territories
      </td>
    </tr>

    <tr>
      <th>Input:</th>
      <td><p>Building code reference document:</p>
        <ul>
          <li>2012/09/06 International Building Code </li>
          <li>2010/05 ASCE/SEI 7 Standard </li>
          <li>2009/03 NEHRP Recommended Provisions </li>
          <li>
            2009 AASHTO Guide Specifications for LRFD Seismic Bridge Design
          </li>
        </ul>
        <p>
          Site address, or latitude and longitude<br />
          Soil classification (for example, Site Class C for "very dense soil
          and soft rock"; not available from the USGS)
        </p>
        <p>
          Note, the application can <a href="/designmaps/us/batch.php">
          batch-process multiple sites</a>.
        </p>
       </td>
    </tr>

    <tr>
      <th>Output:</th>
      <td>
        <p>
          Summary Report: mapped location; and design values and response
          spectra from the building code reference document<br /> Detailed
          Report: the calculations underlying the design values, including any
          associated maps, tables, and equations
        </p>
      </td>
    </tr>

    <tr>
      <th>Similar Tools:</th>
      <td>
        <ul>
          <li>
            <a href="/designmaps/us/regions.php">Regional Minimum and Maximum
            Design Values</a> (Minimum and maximum S<sub>S</sub>, S
            <sub>1</sub>, and PGA values for: 50 U.S. States; Washington, D.C.;
            3,222 counties; and most ZIP codes)
          </li>
          <li><a href="datasets/">Data files of gridded values</a></li>
          <li><a href="pdfs/">Mapped design values</a></li>
          <li>
            <a href="index.php">Seismic design maps and tools</a> (Older U.S.
            or worldwide design)
          </li>
        </ul>
      </td>
    </tr>

    <tr>
      <th><a href="usdesigndoc.php">Documentation &amp; Help</a></th>
      <td></td>
    </tr>
  </table>
