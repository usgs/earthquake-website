<?php

// site search url, leave blank for all usgs
$SITE_URL = 'https://earthquake.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
  '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/earthquakes">Earthquakes</a>' .
  '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/hazards">Hazards</a>' .
  '<a href="/data/">Data &amp; Products</a>' .
  '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/education">Learn</a>' .
  '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/monitoring">Monitoring</a>' .
  '<a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/research">Research</a>';

// at bottom of page
$SITE_COMMONNAV =
  navItem(($SITE_URL), 'Home') .
  navItem('https://www.usgs.gov/natural-hazards/earthquake-hazards/about', 'About Us') .
  navItem('https://www.usgs.gov/natural-hazards/earthquake-hazards/connect', 'Contacts') .
  navItem('/https://www.usgs.gov/policies-and-notices', 'Legal');

$HEAD =
// site theme, should use a site root-relative URL
  '<link rel="stylesheet" href="/theme/site/earthquake/index.css"/>' .
// page head content
  ($HEAD ? $HEAD : '') .
// description meta
  '<meta name="description" content="' .
    'USGS Earthquake Hazards Program, responsible for' .
    ' monitoring, reporting, and researching earthquakes and' .
    ' earthquake hazards' .
    '"/>' .
// keywords meta
  '<meta name="keywords" content="' .
    'aftershock,earthquake,epicenter,fault,foreshock,geologist,' .
    'geophysics,hazard,hypocenter,intensity,intensity scale,magnitude,' .
    'magnitude scale,mercalli,plate,richter,seismic,seismicity,' .
    'seismogram,seismograph,seismologist,seismology,subduction,' .
    'tectonics,tsunami,quake,sismologico,sismologia' .
    '"/>' .
// universal analytics (should be last in $HEAD)
  '<script id="_fed_an_ua_tag" async="async" src="' .
      'https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js' .
      '?agency=DOI&amp;subagency=USGS' .
      '"></script>';

// comments and questions default
if (!isset($CONTACT)) {
  /* $CONTACT_URL = 'https://answers.usgs.gov/cgi-bin/gsanswers';  */
  $CONTACT_URL = 'mailto:lisa@usgs.gov';
}
else {
  $CONTACT_URL = 'mailto:{CONTACT}?subject=EHP%20Website%20Email%20';
}

?>
