<?php

// site search url, leave blank for all usgs
$SITE_URL = 'earthquake.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
        navItem('#earthquakes', 'Earthquakes') .
        navItem('#hazards', 'Hazards') .
        navItem('#data', 'Data') .
        navItem('#learn', 'Learn') .
        navItem('#monitoring', 'Monitoring') .
        navItem('#research', 'Research');

// at bottom of page
$SITE_COMMONNAV =
        navItem('#home', 'Home') .
        navItem('#aboutus', 'About Us') .
        navItem('#contactus', 'Contact Us') .
        navItem('#legal', 'Legal') .
        navItem('#partners', 'Partners');

$HEAD =
        // site theme, should use a site root-relative URL
        '<link rel="stylesheet" href="/css/theme.css"/>' .
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
        '"/>';

?>