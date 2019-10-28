<?php

if (!isset($TEMPLATE)) {
  $TITLE = '2020 Northern California Earthquake Hazards Workshop';
  $HEAD = '<link rel="stylesheet" href="css/styles.css" />';
  $FOOT = '<script src="js/script.js"></script>';

  include 'lib/functions.inc.php';
  include 'lib/classes.inc.php';
  include 'conf/config.inc.php';

  $name = new Input([
    'name' => 'name',
    'required' => true
  ]);
  $email = new Input([
    'name' => 'email',
    'type' => 'email',
    'required' => true
  ]);
  $affiliation = new Input([
    'name' => 'affiliation'
  ]);
  $address1 = new Input([
    'name' => 'address1',
    'label' => 'Address',
    'type' => 'address'
  ]);
  $address2 = new Input([
    'name' => 'address2',
    'label' => 'Apartment, Suite, etc.'
  ]);
  $phone = new Input([
    'name' => 'phone',
    'pattern' => '^[0-9-\.\(\)\s]+$'
  ]);
  $posterNo = new Input([
    'name' => 'poster',
    'type' => 'radio',
    'required' => true,
    'id' => 'posterNo',
    'value' => 'no'
  ]);
  $posterYes = new Input([
    'name' => 'poster',
    'type' => 'radio',
    'required' => true,
    'id' => 'posterYes',
    'value' => 'yes'
  ]);
  $talkNo = new Input([
    'name' => 'talk',
    'type' => 'radio',
    'required' => true,
    'id' => 'talkNo',
    'value' => 'no'
  ]);
  $talkYes = new Input([
    'name' => 'talk',
    'type' => 'radio',
    'required' => true,
    'id' => 'talkYes',
    'value' => 'yes'
  ]);
  $daysTues = new Input([
    'name' => 'days',
    'type' => 'checkbox',
    'required' => true,
    'id' => 'daysTues',
    'value' => 'tuesday'
  ]);
  $daysWeds = new Input([
    'name' => 'days',
    'type' => 'checkbox',
    'required' => true,
    'id' => 'daysWeds',
    'value' => 'wednesday'
  ]);
  $workshop = new Input([
    'name' => 'workshop',
    'type' => 'hidden',
    'value' => 'hazards-2020'
  ]);

  //
  //
  //  (Tuesday and Wednesday)
  //

  $form = new Form([
    'adminEmail' => 'sminson@usgs.gov, shane@usgs.gov, shaefner@usgs.gov',
    'emailSubject' => 'Workshop form submitted by {{name}}',
    'submitButtonText' => 'Register',
    'successMsg' => 'Thank you for registering. We will see you at the workshop!'
  ]);
  $form->addControl($name);
  $form->addControl($email);
  $form->addControl($affiliation);
  $form->addControl($address1);
  $form->addControl($address2);
  $form->addControl($phone);
  $form->addGroup([
    'controls' => [
      $posterYes,
      $posterNo
    ],
    'label' => 'Do you want to present a poster?'
  ]);
  $form->addGroup([
    'controls' => [
      $daysTues,
      $daysWeds
    ],
    'arrangement' => 'stacked',
    'label' => 'Which days are you attending?'
  ]);
  $form->addControl($workshop);

  include 'template.inc.php';
}

?>

<h2>January 28&ndash;29, 2020</h2>
<!--
<p>
Wednesday: 9AM &ndash; 4:30PM<br>
Thursday: 9AM &ndash; 3:45PM
</p>
-->
<p>
  <a href="/contactus/menlo/menloloc.php">USGS Menlo Park Campus</a><br />
  Rambo Auditorium (Building 3 Conference Room)
</p>

<p>The USGS Earthquake Hazards Program annual Northern California Workshop is
  open to anyone interested in better defining earthquake hazards and risk in
  Northern California. All researchers are encouraged to present a poster and/or
  a single-slide lightning talk on their work related to the seismic hazards
  and risk in Northern California.</p>

<p>The <strong>registration deadline</strong> is January 14, 2020.</p>

<p>If you would like to give a lightning talk (three minutes, one slide,
  standard 4:3 aspect ratio, no animations), please contact
  <a href="mailto:sminson@usgs.gov">Sarah Minson</a> no later than January 14.</p>

<div class="row">

  <div class="three-of-five column">
    <?php $form->render(); ?>
    <p class="privacy"><a href="https://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>
  </div>

  <div class="two-of-five column">

    <h3>Agenda</h3>
    <!--<a href="2019-Hazards-Workshop-Agenda.pdf">-->
      Coming Soon!
    <!--</a> (.pdf)-->

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
