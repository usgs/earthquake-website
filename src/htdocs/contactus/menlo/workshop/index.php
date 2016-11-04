<?php

if (!isset($TEMPLATE)) {
  $TITLE = '14th Annual Northern California Earthquake Hazards Workshop';
  $HEAD = '<link rel="stylesheet" href="index.css" />';
  $FOOT = '<script src="index.js"></script>';

  include 'template.inc.php';
}

?>

<h3>January 24&ndash;25, 2017</h3>
<p><a href="https://naccenter.arc.nasa.gov/m3.php">NASA Ames Conference Center</a>, Moffett Field, California<br />
Building 3</p>

<!--

<ul>
<li><a href="Agenda-2017.pdf">Agenda</a> (Adobe .pdf file)</li>
</ul>

-->

<h3>Registration Form</h3>

<p>Registration will close on Friday December 9, 2016.</p>
<p>The USGS Earthquake Program is hosting this workshop to encourage communication and align internal and external research efforts to achieve our scientific goals and promote earthquake hazard products in Northern California.</p>
<p>All researchers are encouraged to present a poster on their work related to the seismic hazards and risk in Northern California. Researchers with NEHRP external grants funded for FY16 and FY17 are especially encouraged to present their results and will have their travel and per diem for the workshop covered if needed (please contact Jack Boatwright [boat@usgs.gov]). The workshop is open to anyone in the scientific community interested in better defining earthquake hazards and risk in Northern California.</p>
<p><strong>U.S. Citizens</strong> must show a valid, officially-issued picture identification at the NASA Research Park gate to enter onto the NASA Research Park, where the conference center is located.</p>
<p><strong>All Foreign Nationals</strong> must go through NASA badging procedures to attend meetings at the conference center. After you register, NASA will contact you and ask you to submit additional information.</p>

<p><span class="required">*</span> = Required</p>

<form action="./" name="workshop" id="workshop" method="post" enctype="application/x-www-form-urlencoded">

  <fieldset form="workshop">
    <div class="field">
      <input type="text" id="fname" name="fname" placeholder="Enter first name" required maxlength="255">
      <label for="fname">First Name</label>
    </div>
    <div class="field">
      <input type="text" id="lname" name="lname" placeholder="Enter last name" required maxlength="255">
      <label for="lname">Last Name</label>
    </div>
    <div class="field">
      <input type="email" id="email" name="email" placeholder="Enter email address" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A_Za-z]{2,4}$" maxlength="255">
      <label for="email">Email</label>
    </div>
    <div class="field">
      <input type="text" id="affiliation" name="affiliation" placeholder="Enter affiliation" maxlength="255">
      <label for="affiliation">Affiliation</label>
    </div>
    <div class="field">
      <input type="text" id="address1" name="address1" placeholder="Enter address line 1" required maxlength="255">
      <label for="address1">Address 1</label>
    </div>
    <div class="field">
      <input type="text" id="address2" name="address2" placeholder="Enter address line 2 " maxlength="255">
      <label for="address2">Address 2</label>
    </div>
    <div class="field">
      <input type="text" id="city" name="city" placeholder="Enter city" required maxlength="255">
      <label for="city">City</label>
    </div>
    <div class="field">
      <input type="text" id="state" name="state" placeholder="Enter state" required maxlength="255">
      <label for="state">State</label>
    </div>
    <div class="field">
      <input type="text" id="zip" name="zip" placeholder="Enter zip" required maxlength="255">
      <label for="zip">Zip</label>
    </div>
    <div class="field">
      <input type="tel" id="phone" name="phone" placeholder="Enter phone number" maxlength="255">
      <label for="phone">Phone</label>
    </div>
  </fieldset>

  <div class="radio">
    <div>
      <p class="required">US Citizen</p>
      <input type="radio" id="citizen-yes" name="citizen" required>
      <label for="citizen-yes">Yes</label>
      <input type="radio" id="citizen-no" name="citizen" required>
      <label for="citizen-no">No</label>
    </div>

    <div>
      <p class="required">Poster</p>
      <input type="radio" id="poster-yes" name="poster" required>
      <label for="poster-yes">Yes</label>
      <input type="radio" id="poster-no" name="poster" required>
      <label for="poster-no">No</label>
    </div>
  </div>

  <button class="blue" type="submit" id="submit" name="submit">Register</button>

</form>
<p class="privacy"><a href="http://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>
