<?php

if (!isset($TEMPLATE)) {
  $TITLE = '14th Annual Northern California Earthquake Hazards Workshop';
  $HEAD = '<link rel="stylesheet" href="index.css" />';
  $FOOT = '<script src="index.js"></script>';

  include 'template.inc.php';
}

// Initialize variables; set defaults
date_default_timezone_set('America/Los_Angeles');
$datetime = date('Y-m-d H:i:s');
$posting = false;
$workshop_year = 2017;

if (isSet($_POST['submit'])) { // user submitted form
  $posting = true;

  $fields = array(
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'email' => $_POST['email'],
    'affiliation' => $_POST['affiliation'],
    'address1' => $_POST['address1'],
    'address2' => $_POST['address2'],
    'city' => $_POST['city'],
    'state' => $_POST['state'],
    'zip' => $_POST['zip'],
    'phone' => $_POST['phone'],
    'citizen' => $_POST['citizen'],
    'poster' => $_POST['poster'],
    'datetime' => $datetime,
    'workshop_year' => $workshop_year
  );

  // Connect to db
  include_once '/etc/puppet/EHPServer.class.php';
  $pdo = EHPServer::getDatabase(
    // the dynamic_earthquake database is replicated between nodes
    'dynamic_earthquake',
    // false = not a read only connection (true is the default)
    false,
    // mysql database ('mysql' is the default, so this is optional)
    'mysql'
  );

  // Insert record
  $stmt = $pdo->prepare('INSERT INTO nca_workshop (datetime, fname, lname,
    email, affiliation, address1, address2, city, state, zip, phone,
    citizen, poster, workshop_year) VALUES (:datetime, :fname, :lname, :email,
    :affiliation, :address1, :address2, :city, :state, :zip, :phone, :citizen,
    :poster, :workshop_year)'
  );
  $stmt->execute($fields);

  // Create summary html
  $return_html = '<p class="alert success">Thank you for filling out the
    registration form. We&rsquo;ll see you at the workshop.</p>';

  $return_html .= '<ul class="no-style results">
      <li><h4>First Name</h4> ' . $fields['fname'] . '</li>
      <li><h4>Last Name</h4> ' . $fields['lname'] . '</li>
      <li><h4>Email</h4> ' . $fields['email'] . '</li>
      <li><h4>Affiliation</h4> ' . $fields['affiliation'] . '</li>
      <li><h4>Address 1</h4> ' . $fields['address1'] . '</li>
      <li><h4>Address 2</h4> ' . $fields['address2'] . '</li>
      <li><h4>City</h4> ' . $fields['city'] . '</li>
      <li><h4>State</h4> ' . $fields['state'] . '</li>
      <li><h4>Zip</h4> ' . $fields['zip'] . '</li>
      <li><h4>Phone</h4> ' . $fields['phone'] . '</li>
      <li><h4>US Citizen</h4> ' . $fields['citizen'] . '</li>
      <li><h4>Poster</h4> ' . $fields['poster'] . '</li>
    </ul>';

  // Email alert
  $admin = 'shane@usgs.gov';
  //$admin = 'shaefner@usgs.gov';
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: shaefner@usgs.gov";
  mail($admin, "Workshop form submitted: $fname $lname", $return_html, $headers);
}

?>

<h2>January 24&ndash;25, 2017</h2>
<p><a href="https://naccenter.arc.nasa.gov/m3.php">NASA Ames Conference Center</a>,
  Moffett Field, California<br />
  Building 3</p>

<!--

<ul>
<li><a href="Agenda-2017.pdf">Agenda</a> (Adobe .pdf file)</li>
</ul>

-->

<?php
  if ($posting) {
    print $return_html;
  } else {
?>

<div class="row">
  <div class="column two-of-three">
    <h3>Registration Form</h3>

    <p>Registration will close on Friday December 9, 2016.</p>
    <p>The USGS Earthquake Program is hosting this workshop to encourage
      communication and align internal and external research efforts to achieve
      our scientific goals and promote earthquake hazard products in Northern
      California.</p>
    <p>All researchers are encouraged to present a poster on their work related
      to the seismic hazards and risk in Northern California. Researchers with
      NEHRP external grants funded for FY16 and FY17 are especially encouraged
      to present their results and will have their travel and per diem for the
      workshop covered if needed (please contact Jack Boatwright [boat@usgs.gov]).
      The workshop is open to anyone in the scientific community interested in
      better defining earthquake hazards and risk in Northern California.</p>
    <p><strong>U.S. Citizens</strong> must show a valid, officially-issued
      picture identification at the NASA Research Park gate to enter onto the
      NASA Research Park, where the conference center is located.</p>
    <p><strong>All Foreign Nationals</strong> must go through NASA badging
      procedures to attend meetings at the conference center. After you
      register, NASA will contact you and ask you to submit additional
      information.</p>
  </div>
  <div class="column one-of-three">
    <h3>Tentative Sessions:</h3>
    <ul>
      <li>Earthquake sources, liquefaction, and landslides in the South Bay</li>
      <li>Reducing seismic risk for critical facilities in urban areas</li>
      <li>What do creep and paleoseismology tell us about the seismic hazard of the Hayward fault?</li>
      <li>Seismic hazards for creeping faults</li>
      <li>Uses of earthquake early warning</li>
      <li>Unmanned aerial vehicles for earthquake response</li>
    </ul>
  </div>
</div>

<p><span class="required">*</span> = Required</p>

<form action="./" name="workshop" id="workshop" method="post"
  enctype="application/x-www-form-urlencoded">

  <fieldset form="workshop">
    <div class="field">
      <input type="text" id="fname" name="fname" placeholder="Enter first name"
        required maxlength="255">
      <label for="fname">First Name</label>
    </div>
    <div class="field">
      <input type="text" id="lname" name="lname" placeholder="Enter last name"
        required maxlength="255">
      <label for="lname">Last Name</label>
    </div>
    <div class="field">
      <input type="email" id="email" name="email" placeholder="Enter email address"
        required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A_Za-z]{2,4}$"
        maxlength="255">
      <label for="email">Email</label>
    </div>
    <div class="field">
      <input type="text" id="affiliation" name="affiliation"
        placeholder="Enter affiliation" maxlength="255">
      <label for="affiliation">Affiliation</label>
    </div>
    <div class="field">
      <input type="text" id="address1" name="address1"
        placeholder="Enter address line 1" required maxlength="255">
      <label for="address1">Address 1</label>
    </div>
    <div class="field">
      <input type="text" id="address2" name="address2"
        placeholder="Enter address line 2 " maxlength="255">
      <label for="address2">Address 2</label>
    </div>
    <div class="field">
      <input type="text" id="city" name="city" placeholder="Enter city"
        required maxlength="255">
      <label for="city">City</label>
    </div>
    <div class="field">
      <input type="text" id="state" name="state" placeholder="Enter state"
        required maxlength="255">
      <label for="state">State</label>
    </div>
    <div class="field">
      <input type="text" id="zip" name="zip" placeholder="Enter zip" required
        maxlength="255">
      <label for="zip">Zip</label>
    </div>
    <div class="field">
      <input type="tel" id="phone" name="phone" placeholder="Enter phone number"
        maxlength="255">
      <label for="phone">Phone</label>
    </div>
  </fieldset>

  <div class="radio">
    <div>
      <p class="required">US Citizen</p>
      <input type="radio" id="citizen-yes" name="citizen" value="yes" required>
      <label for="citizen-yes">Yes</label>
      <input type="radio" id="citizen-no" name="citizen" value="no" required>
      <label for="citizen-no">No</label>
    </div>
    <div>
      <p class="required">Poster</p>
      <input type="radio" id="poster-yes" name="poster" value="yes" required>
      <label for="poster-yes">Yes</label>
      <input type="radio" id="poster-no" name="poster" value="no" required>
      <label for="poster-no">No</label>
    </div>
  </div>

  <button class="blue" type="submit" id="submit" name="submit">Register</button>

</form>

<p class="privacy"><a href="http://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>

<?php
  }
?>
