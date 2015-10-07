<?php
  $section = "/contactus";

  echo navItem("${section}/", "Contact Us");
  echo navItem("${section}/headquarters.php", "Headquarters");

  echo navGroup(("Science Centers"),

    navItem("${section}/anchorage/", "Alaska Science Center").
    navItem("${section}/menlo/", "Earthquake Science Center").
    navItem("${section}/golden/", "Geologic Hazards Science Center")
  );

  echo navGroup(("Regional and Field Offices"),

    navItem("${section}/seattle/", "Seattle Field Office").
    navItem("${section}/pasadena/", "Pasadena Field Office").
    navItem("${section}/albuquerque/", "Albuquerque Seismo Lab")
);

  echo navItem("${section}/media.php", "Media Contacts");
  echo navItem("mailto:sis_eq_questions@usgs.gov", "Earthquake Questions and Website Feedback");

?>
