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
  try {
    $stmt->execute($fields);
  } catch (Exception $e) {
    print "Error: $e->getMessage()";
  }

  // Create summary html
  $return_html .= '<ul class="no-style results">
      <li><h4>First Name</h4> ' . htmlentities(stripslashes($fields['fname'])) . '</li>
      <li><h4>Last Name</h4> ' . htmlentities(stripslashes($fields['lname'])) . '</li>
      <li><h4>Email</h4> ' . htmlentities(stripslashes($fields['email'])) . '</li>
      <li><h4>Affiliation</h4> ' . htmlentities(stripslashes($fields['affiliation'])) . '</li>
      <li><h4>Address 1</h4> ' . htmlentities(stripslashes($fields['address1'])) . '</li>
      <li><h4>Address 2</h4> ' . htmlentities(stripslashes($fields['address2'])) . '</li>
      <li><h4>City</h4> ' . htmlentities(stripslashes($fields['city'])) . '</li>
      <li><h4>State</h4> ' . htmlentities(stripslashes($fields['state'])) . '</li>
      <li><h4>Zip</h4> ' . htmlentities(stripslashes($fields['zip'])) . '</li>
      <li><h4>Phone</h4> ' . htmlentities(stripslashes($fields['phone'])) . '</li>
      <li><h4>US Citizen</h4> ' . htmlentities(stripslashes($fields['citizen'])) . '</li>
      <li><h4>Poster</h4> ' . htmlentities(stripslashes($fields['poster'])) . '</li>
    </ul>';

  // Email alert
  $admin = 'shane@usgs.gov, garcia@usgs.gov, shaefner@usgs.gov';
  //$admin = 'shaefner@usgs.gov';
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: shaefner@usgs.gov";
  $name = htmlentities(stripslashes($fields['fname'])) . ' ' .
    htmlentities(stripslashes($fields['lname']));
  mail($admin, "Workshop form submitted: $name", $return_html, $headers);
}

?>

<h2>January 24&ndash;25, 2017</h2>
<p><a href="https://naccenter.arc.nasa.gov/m3.php">NASA Ames Conference Center</a>,
  Moffett Field, California<br />
  Building 3</p>

<?php
  if ($posting) {
    print '<p class="alert success">Thank you for filling out the
    registration form. We&rsquo;ll see you at the workshop.</p>';
  }
?>

<div class="row">
  <div class="three-of-five column">
    <p>The USGS Earthquake Program is hosting this workshop to encourage
      communication and align internal and external research efforts to achieve
      our scientific goals and promote earthquake hazard products in Northern
      California.</p>

    <h3>Agenda</h3>
    <p><a href="Earthquake-Hazards-Workshop-Agenda.pdf">Agenda</a> (Adobe .pdf file)</p>

    <h3>Tentative Sessions</h3>
    <ul>
      <li>Earthquake sources, liquefaction, and landslides in the South Bay</li>
      <li>Reducing seismic risk for critical facilities in urban areas</li>
      <li>What do creep and paleoseismology tell us about the seismic hazard of
        the Hayward fault?</li>
      <li>Seismic hazards for creeping faults</li>
      <li>Uses of earthquake early warning</li>
      <li>Unmanned aerial vehicles for earthquake response</li>
    </ul>

    <p>All researchers are encouraged to present a poster on their work related
      to the seismic hazards and risk in Northern California. Researchers with
      NEHRP external grants funded for FY16 and FY17 are especially encouraged
      to present their results and will have their travel and per diem for the
      workshop covered if needed (please contact
      <a href="mailto:boat@usgs.gov">Jack Boatwright</a>). The workshop is open
      to anyone in the scientific community interested in better defining
      earthquake hazards and risk in Northern California.</p>
  </div>
  <div class="two-of-five column">
    <h3>NASA Campus Map</h3>
    <figure>
      <a href="http://www.nasa.gov/images/content/530289main_NRP_map_full.jpg">
        <img src="nasa-map.jpg" alt="NASA Campus Map" />
      </a>
    </figure>
    <h3>Public Transport</h3>
    <ul>
      <li><a href="http://www.caltrain.com/">Caltrain</a></li>
      <li><a href="http://www.vta.org/">VTA Light Rail</a></li>
      <li><a href="NASA-Ames-Shuttle-Service.pdf">NASA Shuttle Schedule</a> (Adobe .pdf file)<br />
      The NASA Shuttle is open to anyone with a government ID. For non-government
      attendees, <a href="http://www.vta.org/routes/rt81">VTA route 81</a> runs
      between Moffett Field and the Caltrain station</li>
    </ul>
  </div>
</div>

<?php
  if ($posting) {
    print $return_html;
    return;
  }
?>

<h3>Lodging</h3>

<ul class="no-style lodging">
  <li>The Exchange Lodge<br />
  North Akron Building N19 Moffett Field, CA 94035<br />
  (650) 603-7100<br />
  RATE: $55&ndash;$65</li>
  <li>Navy Lodge<br />
  593 Vernon Ave, Mountain View, CA 94043<br />
  (650) 962-1542  (outside of the base)<br />
  RATE:  $99/night (50 rooms)</li>
  <li>Ramada Mountain View<br />
  55 Fairchild Dr, Mountain View, CA 94043<br />
  (650) 967-6856<br />
  RATE:  $259-279; Govt rate: $206 (no shuttle)</li>
  <li>Quality Inn &amp; Suites at NASA Ames<br />
  5 Fairchild Dr., Mountain View, CA 94043<br />
  (650) 934-0155<br />
  RATE:  $249; Govt rate: $223 (no shuttle)</li>
  <li>County Inn (3.3 Stars)<br />
  850 Leong Dr., Mountain View, CA 94043<br />
  (650) 961-1131<br />
  RATE:  $219; no Govt rate (no shuttle)</li>
</ul>

<h3>Registration Form</h3>

<p>Registration will close on Friday December 9, 2016.</p>
<p><strong>U.S. Citizens</strong> must show a valid, officially-issued
  picture identification at the NASA Research Park gate to enter onto the
  NASA Research Park, where the conference center is located.</p>
<p><strong>All Foreign Nationals</strong> must go through NASA badging
  procedures to attend meetings at the conference center. After you
  register, NASA will contact you and ask you to submit additional
  information.</p>

<p><span class="required">*</span> = Required</p>

<form action="https://earthquake.usgs.gov/contactus/menlo/workshop/"
  name="workshop" id="workshop" method="post" enctype="application/x-www-form-urlencoded">

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
