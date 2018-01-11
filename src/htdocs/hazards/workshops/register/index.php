<?php

if (!isset($TEMPLATE)) {
  $TITLE = '2018 NSHM Update Workshop Registration';
  $HEAD = '<link rel="stylesheet" href="index.css" />';
  $FOOT = '<script src="index.js"></script>';

  include 'template.inc.php';
}

// Initialize variables; set defaults
date_default_timezone_set('America/Los_Angeles');
$datetime = date('Y-m-d H:i:s');
$posting = false;

// Key to distinguish this specific workshop in the database
$workshop = 'nshm-update2018';

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
    'day1' => $_POST['day1'],
    'day2' => $_POST['day2'],
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
  $stmt = $pdo->prepare('INSERT INTO workshops (datetime, fname, lname,
    email, affiliation, address1, address2, city, state, zip, phone,
    day1, day2, workshop) VALUES (:datetime, :fname, :lname, :email,
    :affiliation, :address1, :address2, :city, :state, :zip, :phone, :day1,
    :day2, :workshop)'
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
      <li><h4>Day1</h4> ' . htmlentities(stripslashes($fields['day1'])) . '</li>
      <li><h4>Day2</h4> ' . htmlentities(stripslashes($fields['day2'])) . '</li>
    </ul>';

  // Email alert
  $admin = 'ashumway@usgs.gov';
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: ashumway@usgs.gov";
  $name = htmlentities(stripslashes($fields['fname'])) . ' ' .
    htmlentities(stripslashes($fields['lname']));
  mail($admin, "Workshop form submitted: $name", $return_html, $headers);
}

?>

<h2>When: March 7&ndash;8, 2018, 9:00am&ndash;4:30pm</h2>
<h2>Where: RMS Headquarters (7575 Gateway Blvd., Newark, CA 94560)</h2>

<p>
  Registration will close on Friday, March 2<sup>nd</sup>, 2018, or when 145 people have registered to attend the workshop in-person, whichever comes first.
</p>

<?php
  if ($posting) {
    print '<p class="alert success">Thank you for filling out the
    registration form. We&rsquo;ll see you at the workshop.</p>';
  }
?>

<div class="row">

  <div class="three-of-five column">

    <?php
      if ($posting) {
        print $return_html;
      } else {
    ?>

    <h3>Registration Form</h3>

    <p><span class="required">*</span> = Required</p>

    <form action="https://earthquake.usgs.gov/hazards/workshops/register/"
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
          <p class="required">Day 1</p>
          <input type="radio" id="day1-inperson" name="day1" value="in-person" required>
          <label for="day1-inperson">In-Person</label>
          <input type="radio" id="day1-webex" name="day1" value="webex" required>
          <label for="day1-webex">Webex</label>
        </div>
        <div>
          <p class="required">Day 2</p>
          <input type="radio" id="day2-inperson" name="day2" value="in-person" required>
          <label for="day2-inperson">In-Person</label>
          <input type="radio" id="day2-webex" name="day2" value="webex" required>
          <label for="day2-webex">Webex</label>
        </div>
      </div>

      <button class="blue" type="submit" id="submit" name="submit">Register</button>

    </form>

    <p class="privacy"><a href="https://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>

    <?php } ?>
  </div>


<!-- *****************Information Links in right column******************* -->

  <div class="two-of-five column">
    <h3><a href="/hazards/workshops/update2018/">Workshop Information and Lodging</a></h3>

  </div>

</div>
