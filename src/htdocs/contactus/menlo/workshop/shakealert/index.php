<?php

if (!isset($TEMPLATE)) {
  $TITLE = '2019 ShakeAlert Research Workshop';
  $HEAD = '<link rel="stylesheet" href="../css/styles.css" />';
  $FOOT = '<script src="../js/script.js"></script>';

  include '../lib/functions.inc.php';
  include '../lib/classes.inc.php';
  include '../conf/config.inc.php';

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
    'label' => 'Address 1'
  ]);
  $address2 = new Input([
    'name' => 'address2',
    'label' => 'Address 2'
  ]);
  $city = new Input([
    'name' => 'city'
  ]);
  $state = new Input([
    'name' => 'state'
  ]);
  $postalCode = new Input([
    'name' => 'postalCode',
    'label' => 'Zip'
  ]);
  $phone = new Input([
    'name' => 'phone',
    'pattern' => '^[0-9-\.\(\)\s]+$'
  ]);
  $position = new Input([
    'name' => 'position',
    'description' => 'Enter student, post-doc, staff scientist, faculty, etc.',
    'required' => true
  ]);
  $role = new Textarea([
    'name' => 'role',
    'label' => 'Role in ShakeAlert',
    'description' => '~50 words',
    'rows' => 3,
    'required' => true
  ]);
  $focus = new Textarea([
    'name' => 'focus',
    'label' => 'EEW Research Focus',
    'description' => 'Statement of what you would be willing to present in a short talk (~200 words)',
    'rows' => 6
  ]);
  $yes = new Input([
    'id' => 'yes',
    'name' => 'travel',
    'type' => 'radio',
    'required' => true,
    'value' => 'yes'
  ]);
  $no = new Input([
    'id' => 'no',
    'name' => 'travel',
    'type' => 'radio',
    'required' => true,
    'value' => 'no'
  ]);
  $workshop = new Input([
    'name' => 'workshop',
    'type' => 'hidden',
    'value' => 'shakealert-2019'
  ]);

  $form = new Form([
    'adminEmail' => 'jmcguire@usgs.gov, shaefner@usgs.gov',
    'emailSubject' => 'Workshop form submitted by {{name}}',
    'successMsg' => 'Thank you for registering. We will see you at the workshop!'
  ]);
  $form->addControl($name);
  $form->addControl($email);
  $form->addControl($affiliation);
  $form->addControl($address1);
  $form->addControl($address2);
  $form->addControl($city);
  $form->addControl($state);
  $form->addControl($postalCode);
  $form->addControl($phone);
  $form->addControl($position);
  $form->addControl($role);
  $form->addControl($focus);
  $form->addGroup([
    'controls' => [
      $yes,
      $no
    ],
    'label' => 'Do you need Travel Support?'
  ]);
  $form->addControl($workshop);

  include 'template.inc.php';
}

?>

<h2>January 15&ndash;16, 2018</h2>

<p>
Tuesday: 10AM &ndash; 5PM<br />
Wednesday: 8AM &ndash; 1PM
</p>

<p>
  <a href="/contactus/menlo/menloloc.php">USGS Menlo Park Campus</a><br />
  Rambo Auditorium (Building 3 Conference Room)
</p>

<div class="row">

  <div class="three-of-five column">
    <?php $form->render(); ?>
    <p class="privacy"><a href="https://www.usgs.gov/privacy.html">USGS Privacy Policy</a></p>
  </div>

  <div class="two-of-five column">
    <p>ShakeAlert is spatially distributed research community, and thus face-to-face meetings
      are beneficial for bringing each other up-to-date on the latest results, long-term planning, and
      informal brainstorming among small groups about specific projects. The 2019 ShakeAlert
      Research workshop will provide a chance for scientists that are actively involved in ShakeAlert
      and the USGS-funded external EEW research program to discuss ways they can work together
      on future research projects aimed at improving the accuracy and timeliness of ShakeAlert. This
      1.5 day workshop will provide an opportunity for researchers to present updates on their latest
      research as well as for targeted discussions of key issues facing ShakeAlert.</p>
    <p>This is an open workshop for active researchers in EEW. We request a
      few pieces of information to help the steering committee arrange the agenda. USGS will
      provide travel support for a modest number of participants at the Staff Scientist,
      Faculty, or Post-doc level, and preference will be given to those who work (or used to work)
      directly on ShakeAlert. Per USGS rules, travel support is limited to those located more
      than 50 miles from Menlo Park. Travel Support requests will be answered by December 15th.</p>
    <p>Please contact <a href="mailto:jmcguire@usgs.gov">Jeff McGuire</a> with any questions.</p>
  </div>

</div>
