<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "Risk-Targeted Ground Motion Calculator";
    $NAVIGATION = true;
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
      with &ldquo;Method 2&rdquo; of 2010 ASCE 7 Standard Section 21.2.1.2.
      for the design of buildings in the U.S.
    </td>
  </tr>
  <tr>
    <th>Input:</th>
    <td>
      A probabilistic seismic hazard curve (i.e., Spectral Response
      Acceleration and Annual Frequency of Exceedance Values)
    </td>
  </tr>
  <tr>
    <th>Output:</th>
    <td>
      Risk-targeted Ground Motion
      <br/><br/>
      Risk Coefficient, which is the ratio of the Risk-targeted Ground
      Motion divided by the Uniform Hazard Ground Motion
      <br/><br/>
      Illustration of the iterative integration by which the risk-targeted
      ground motion is calculated
    </td>
  </tr>
  <tr>
    <th>
      <a href="https://github.com/usgs/earthquake-rtgm-calculator/wiki/Risk-Targeted-Ground-Motion-Calculator-Documentation">
      Documentation &amp; Help</a>
    </th>
    <td>&nbsp;</td>
  </tr>
</table>
