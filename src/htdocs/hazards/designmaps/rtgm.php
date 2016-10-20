<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "Risk Targeted Ground Motion Calculator";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<form action="/designmaps/rtgm/">
  <button type="submit">Use the Calculator</button>
</form>
<br/>
<table class="tabular">
  <tr>
    <th>Purpose:</th>
      <td>
        Calculate risk-targeted ground motion parameter values in accordance
        with “Method 2” of 2010 ASCE 7 Standard Section 21.2.1.2. for the design
        of buildings in the U.S.
      </td>
  </tr>
  <tr>
    <th>Input:</th>
      <td>
        <p>
          A probabilistic seismic hazard curve (i.e., Spectral Response
          Acceleration and Annual Frequency of Exceedance Values)
        </p>
      </td>
  </tr>
  <tr>
    <th>Output:</th>
      <td>
        <p>
           Risk-targeted Ground Motion
        </P>
        <p>
          Risk Coefficient, which is the ratio of the Risk-targeted Ground
          Motion divided by the Uniform Hazard Ground Motion
        </p>
        <p>
          Illustration of the iterative integration by which the risk-targeted
          ground motion is calculated
        </p>
      </td>
  </tr>
  <tr>
    <th>
      <a href="https://github.com/usgs/earthquake-rtgm-calculator/wiki/Risk-Targeted-Ground-Motion-Calculator-Documentation">Documentation &amp; Help</a>
    </th>
      <td>
      </td>
  </tr>
</table>
