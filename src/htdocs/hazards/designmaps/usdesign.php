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

<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools
  by third parties, this spring the USGS will be streamlining the two U.S.
  Seismic Design Maps web applications, including the one described below.
  Whereas the current applications each interact with users through a graphical
  user interface (GUI), the new web services will receive the inputs (e.g.
  latitude and longitude) in the form of a web address and return the outputs
  (e.g. S<sub>DS</sub> and S<sub>D1</sub>) in text form, without supplementary
  graphics. Though designed primarily to be read by the aforementioned
  third-party web GUIs, the text outputs are also human-readable. To preview
  the new web services, <a href="/ws/designmaps/">please click here</a>.
  Step-by-step instructions for using one of these web services,
  namely that for the recently published 2016 ASCE 7 Standard, <a
  href="./step-by-step-instructions-for-webservice_v3.pdf">are posted here</a>.
</p>

<form action="/designmaps/us/application.php">
  <button type="submit">Use the Application</button>
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
            <a href="https://www.sciencebase.gov/catalog/item/58e79219e4b09da6799c0dec">Regional Minimum and Maximum
            Design Values</a> (Minimum and maximum S<sub>S</sub>, S
            <sub>1</sub>, and PGA values for: 50 U.S. States; Washington, D.C.;
            3,222 counties; and most ZIP codes)
          </li>
          <li><a href="datasets/">Data files of gridded values</a></li>
          <li><a href="pdfs/">Mapped design values</a></li>
        </ul>
      </td>
    </tr>

    <tr>
      <th><a href="usdesigndoc.php">Documentation &amp; Help</a></th>
      <td></td>
    </tr>
  </table>
