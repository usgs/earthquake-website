<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Workshop: San Francisco Bay Area Seismic Velocity Models for Seismic Hazard Assessment';
  $HEAD = '<link rel="stylesheet" href="index.css" />';
  $FOOT = '<script src="index.js"></script>';

  include 'template.inc.php';
}

// Initialize variables; set defaults
date_default_timezone_set('America/Los_Angeles');
$datetime = date('Y-m-d H:i:s');
$posting = false;
$workshop = 'svm-2018';

if (isSet($_POST['submit'])) { // user submitted form
  $posting = true;

  $fields = array(
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'email' => $_POST['email'],
    'affiliation' => $_POST['affiliation'],
    //'address1' => $_POST['address1'],
    //'address2' => $_POST['address2'],
    //'city' => $_POST['city'],
    //'state' => $_POST['state'],
    //'zip' => $_POST['zip'],
    //'phone' => $_POST['phone'],
    //'poster' => $_POST['poster'],
    'plan' => $_POST['plan'],
    'travel' => $_POST['travel'],
    'datetime' => $datetime,
    'workshop' => $workshop
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
/*
  $stmt = $pdo->prepare('INSERT INTO workshops (datetime, fname, lname,
    email, affiliation, address1, address2, city, state, zip, phone,
    poster, workshop) VALUES (:datetime, :fname, :lname, :email,
    :affiliation, :address1, :address2, :city, :state, :zip, :phone, :poster,
    :workshop)'
  );
*/
  $stmt = $pdo->prepare('INSERT INTO workshops (datetime, fname, lname,
    email, affiliation, workshop, plan, travel) VALUES (:datetime, :fname, :lname, :email,
    :affiliation, :workshop, :plan, :travel)'
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
      <li><h4>Five-year Plan</h4> ' . htmlentities(stripslashes($fields['plan'])) . '</li>
      <li><h4>Travel Support</h4> ' . htmlentities(stripslashes($fields['travel'])) . '</li>' .
      /*
      <li><h4>Address 1</h4> ' . htmlentities(stripslashes($fields['address1'])) . '</li>
      <li><h4>Address 2</h4> ' . htmlentities(stripslashes($fields['address2'])) . '</li>
      <li><h4>City</h4> ' . htmlentities(stripslashes($fields['city'])) . '</li>
      <li><h4>State</h4> ' . htmlentities(stripslashes($fields['state'])) . '</li>
      <li><h4>Zip</h4> ' . htmlentities(stripslashes($fields['zip'])) . '</li>
      <li><h4>Phone</h4> ' . htmlentities(stripslashes($fields['phone'])) . '</li>
      <li><h4>Poster</h4> ' . htmlentities(stripslashes($fields['poster'])) . '</li>
      */
    '</ul>';

  // Email alert
  //$admin = 'shane@usgs.gov, garcia@usgs.gov, shaefner@usgs.gov';
  $admin = 'aagaard@usgs.gov, shaefner@usgs.gov';
  //$admin = 'shaefner@usgs.gov';
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: shaefner@usgs.gov";
  $name = htmlentities(stripslashes($fields['fname'])) . ' ' .
    htmlentities(stripslashes($fields['lname']));
  mail($admin, "Workshop form submitted: $name", $return_html, $headers);
}

?>

<h2>March 21-22, 2018</h2>

<p>
  <a href="/contactus/menlo/menloloc.php">USGS Menlo Park Campus</a><br />
  Rambo Auditorium (Building 3 Conference Room)
</p>

<?php
  if ($posting) {
    print '<p class="alert success">Thank you for filling out the
    registration form. We&rsquo;ll see you at the workshop.</p>';
  }
?>

<div class="row">

  <div class="three-of-five column">
<?php /*
    <p>The USGS Earthquake Program is hosting this workshop to encourage
      communication and align internal and external research efforts to achieve
      our scientific goals and promote earthquake hazard products in Northern
      California.</p>

    <p>All researchers are encouraged to present a poster on their work related
      to the seismic hazards and risk in Northern California. Researchers with
      NEHRP external grants funded for FY17 and FY18 are especially encouraged
      to present their results and will have their travel and per diem for the
      workshop covered if needed (please contact
      <a href="mailto:boat@usgs.gov">Jack Boatwright</a>). The workshop is open
      to anyone in the scientific community interested in better defining
      earthquake hazards and risk in Northern California.</p>

    <h3>Agenda</h3>
    <p><a href="Earthquake-Hazards-Workshop-Agenda.pdf">Agenda</a> (Adobe .pdf file)</p>
*/ ?>

    <p>The objective of the workshop is to develop a five-year plan for
      leveraging community resources to systematically and continually improve
      one or more 3-D seismic velocity models for the San Francisco Bay Area
      and the surrounding region for use in seismic hazard assessment. The
      workshop will include suites of short talks, discussions, and breakout
      sessions. The results of the workshop will be synthesized in a technical
      report by a subset of the participants. Please feel free to pass along
      this invitation to colleagues, especially early career scientists. Travel
      support will be available for some participants. For additional
      information, please contact <a href="mailto: baagaard@usgs.gov">Brad
      Aagaard</a>.</p>

    <?php
      if ($posting) {
        print $return_html;
      } else {
    ?>

    <h3>Registration Form</h3>

    <p>Registration will close on <span style="color: red">Wed, March 7, 2018</span>.</p>

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
<?php /*
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
*/ ?>
      </fieldset>

      <div class="radio" style="display: block;">
        <!--
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
        -->
        <div>
          <p class="required">Are you interested in helping synthesize the
            workshop results into a five-year plan and in contributing to the technical report?</p>
          <p style="font-size: .9em; color: #999; margin-top: -.75em;">(some funding is available)</p>
          <input type="radio" id="plan-yes" name="plan" value="yes" required>
          <label for="plan-yes">Yes</label>
          <input type="radio" id="plan-no" name="plan" value="no" required>
          <label for="plan-no">No</label>
        </div>
        <div>
          <p class="required">Do you need travel support in order to attend the workshop?</p>
          <input type="radio" id="travel-yes" name="travel" value="yes" required>
          <label for="travel-yes">Yes</label>
          <input type="radio" id="travel-no" name="travel" value="no" required>
          <label for="travel-no">No</label>
        </div>
      </div>

      <button class="blue" type="submit" id="submit" name="submit">Register</button>

    </form>

    <p class="privacy"><a href="https://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>

    <?php } ?>
  </div>

  <div class="two-of-five column">

    <h3>Agenda</h3>
    <a href="BayAreaSeismicVelocityModelWorkshop.pdf">
      Preliminary Agenda
    </a> (.pdf)

    <h3>USGS Menlo Park Campus Map</h3>
    <figure>
      <img src="usgs-map.gif" alt="USGS Campus Map" />
    </figure>
    <p>
      <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=345+Middlefield+Rd,+Menlo+Park,+CA+94025&sll=37.0625,-95.677068&sspn=71.686451,83.320312&ie=UTF8&hq=&hnear=345+Middlefield+Rd,+Menlo+Park,+San+Mateo,+California+94025&ll=37.452785,-122.167282&spn=0.118559,0.119133&z=13">Driving
      Directions</a> (Google Maps)
    </p>
    <h3>Public Transport</h3>
    <ul>
      <li><a href="http://www.caltrain.com/">Caltrain</a></li>
    </ul>
  </div>

</div>
