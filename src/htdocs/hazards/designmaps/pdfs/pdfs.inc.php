<?php

/*
 * A simple array of building codes, with all of the designmaps uploaded for
 * each one.
 *
 * $DESIGNMAPS_KEY is an associated array arranged as a tree:
 * Code Name => Code Edition => Region => Map Type => Filename
 *
 * Note that some of the levels can have extra keys. Each edition can have a
 * 'filename-prefix' key that has some part of the filename common to all of
 * the maps in that edition. Each region can also have an 'extra' key, which has
 * a small subtitle for that region; it's used here to show region numbers if
 * the code has them.
 *
 * @version 0.4.1 2011-06-22
 */

$MAPTYPE_KEY = array(
  '0.2s MCE' => '0.2s MCE Ground Motion',
  '1.0s MCE' => '1.0s MCE Ground Motion',
  '0.2s, 1.0s MCE' => '0.2s, 1.0s MCE Ground Motion',
  'Seismic Design Categories' => 'Seismic Design Categories',
  'Long-Period Transition' =>
    'Long-Period Transition Period (T<sub>L</sub>, sec)',
  'PGA' => 'Geometric Mean Peak Ground Acceleration',
  '0.2s 10% Probability of Exceedance' =>
    '0.2s Uniform-Hazard (10% in 50-Year) Ground Motions',
  '1.0s 10% Probability of Exceedance' =>
    '1.0s Uniform-Hazard (10% in 50-Year) Ground Motions',
  '0.2s 2% Probability of Exceedance' =>
    '0.2s Uniform-Hazard (2% in 50-Year) Ground Motions',
  '1.0s 2% Probability of Exceedance' =>
    '1.0s Uniform-Hazard (2% in 50-Year) Ground Motions',
);

// ghscweb is... weird about globals
$GLOBALS['DESIGNMAPS_KEY'] = array(
  'AASHTO' => array(
    'display-name' => 'AASHTO Guide Specifications for LRFD Seismic Bridge Design',
    '2009' => array(
      'filename-prefix' => 'AASHTO-2009-Figure-3.4.1-',
      'Conterminous US' => array(
        'Peak Horizontal Acceleration (7% in 75-Year)' => '2.pdf',
        '0.2s (7% in 75-Year) Ground Motions' => '3.pdf',
        '1.0s (7% in 75-Year) Ground Motions' => '4.pdf',
      ),
      'Alaska' => array(
        'Peak Horizontal Acceleration (7% in 75-Year)' => '18.pdf',
        '0.2s (7% in 75-Year) Ground Motions' => '19.pdf',
        '1.0s (7% in 75-Year) Ground Motions' => '20.pdf',
      ),
      'Hawaii' => array(
        'Peak Horizontal Acceleration (7% in 75-Year)' => '16.pdf',
        '0.2s and 1.0s (7% in 75-Year) Ground Motions' => '17.pdf',
      ),
      'Puerto Rico and U.S. Virgin Islands' => array(
        'Peak Horizontal Acceleration (7% in 75-Year)' => '21.pdf',
        '0.2s and 1.0s (7% in 75-Year) Ground Motions' => '22.pdf',
      ),
    ),
  ),
  'ASCE 7' => array(
    'display-name' => 'ASCE 7 Standard',
    '1998 & 2002' => array(
      'filename-prefix' => 'ASCE7-1998-2002-Figure-9-4-1-1',
      'Conterminous US' => array(
        '0.2s MCE' => 'a-US.pdf',
        '1.0s MCE' => 'b-US.pdf',
      ),
      'Alaska' => array(
        '0.2s, 1.0s MCE' => 'g-AK.pdf',
      ),
      'California' => array(
        'extra' => 'Region 1',
        '0.2s MCE' => 'c-REG1.pdf',
        '1.0s MCE' => 'd-REG1.pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => 'h-HI.pdf',
      ),
      'Intermountain West' => array(
        'extra' => 'Region 2',
        '0.2s MCE' => 'e-REG2.pdf',
        '1.0s MCE' => 'f-REG2.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands, Guam, Tutuilla' => array(
        '0.2s, 1.0s MCE' => 'ij-PRGU.pdf',
      ),
    ),
    '2005' => array(
      'filename-prefix' => 'ASCE7-2005-Figure22-',
      'Conterminous US' => array(
        '0.2s MCE' => '01.pdf',
        '1.0s MCE' => '02.pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '11.pdf',
        '1.0s MCE' => '12.pdf',
      ),
      'California' => array(
        'extra' => 'Region 1',
        '0.2s MCE' => '03.pdf',
        '1.0s MCE' => '04.pdf',
      ),
      'Guam, Tutuilla' => array(
        '0.2s, 1.0s MCE' => '14.pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '10.pdf',
      ),
      'New Madrid Seismic Zone' => array(
        'extra' => 'Region 3',
        '0.2s MCE' => '07.pdf',
        '1.0s MCE' => '08.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s, 1.0s MCE' => '13.pdf',
      ),
      'South Carolina' => array(
        '0.2s, 1.0s MCE' => '09.pdf',
      ),
      'Wasatch' => array(
        'extra' => 'Region 2',
        '0.2s MCE' => '05.pdf',
        '1.0s MCE' => '06.pdf',
      ),
    ),
    '2010' => array(
      'filename-prefix' => '2010_ASCE-7_Figure',
      'Conterminous US' => array(
        '0.2s MCE' => '_22-1.pdf',
        '1.0s MCE' => '_22-2.pdf',
        'PGA' => '_22-7.pdf',
        'Long-Period Transition' => '_22-12.pdf',
        '0.2s Mapped Risk Coefficient' => '_22-17.pdf',
        '1.0s Mapped Risk Coefficient' => '_22-18.pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '_22-3.pdf',
        '1.0s MCE' => '_22-4.pdf',
        'PGA' => 's_22-8_and_22-9.pdf',
        'Long-Period Transition' => 's_22-13_and_22-14.pdf',
      ),
      'Guam and American Samoa' => array(
        'PGA' => 's_22-10_and_22-11.pdf',
        'Long-Period Transition' => 's_22-15_and_22-16.pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '_22-5.pdf',
        'PGA' => 's_22-8_and_22-9.pdf',
        'Long-Period Transition' => 's_22-13_and_22-14.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s, 1.0s MCE' => '_22-6.pdf',
        'PGA' => 's_22-10_and_22-11.pdf',
        'Long-Period Transition' => 's_22-15_and_22-16.pdf',
      ),
    ),
  ),

  'IBC' => array(
    'display-name' => 'International Building Code',
    '2000 & 2003' => array(
      'filename-prefix' => 'IBC-2000-2003-Figure-1615-',
      'Alaska' => array(
        '0.2s, 1.0s MCE' => '7ak.pdf',
      ),
      'California' => array(
        'extra' => 'Region 1',
        '0.2s MCE' => '3ca.pdf',
        '1.0s MCE' => '4ca.pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '8hi.pdf',
      ),
      'Intermountain West' => array(
        'extra' => 'Region 2',
        '0.2s MCE' => '5slc.pdf',
        '1.0s MCE' => '6slc.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands, Guam, Tutuilla' => array(
        '0.2s, 1.0s MCE' => '9_10prgu.pdf',
      ),
    ),
    '2006 & 2009' => array(
      'filename-prefix' => 'IBC-2006-Figure1613_5',
      'Conterminous US' => array(
        '0.2s MCE' => '(01).pdf',
        '1.0s MCE' => '(02).pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '(11).pdf',
        '1.0s MCE' => '(12).pdf',
      ),
      'California' => array(
        'extra' => 'Region 1',
        '0.2s MCE' => '(03).pdf',
        '1.0s MCE' => '(04).pdf',
      ),
      'Guam, Tutuilla' => array(
        '0.2s, 1.0s MCE' => '(14).pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '(10).pdf',
      ),
      'New Madrid Seismic Zone' => array(
        'extra' => 'Region 3',
        '0.2s MCE' => '(07).pdf',
        '1.0s MCE' => '(08).pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s, 1.0s MCE' => '(13).pdf',
      ),
      'South Carolina' => array(
        '0.2s, 1.0s MCE' => '(09).pdf',
      ),
      'Wasatch' => array(
        'extra' => 'Region 2',
        '0.2s MCE' => '(05).pdf',
        '1.0s MCE' => '(06).pdf',
      ),
    ),
    '2012' => array(
      'filename-prefix' => 'IBC-2012-Fig1613p3p1',
      'Conterminous US' => array(
        '0.2s MCE' => '(1).pdf',
        '1.0s MCE' => '(2).pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '(4).pdf',
        '1.0s MCE' => '(5).pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '(3).pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s, 1.0s MCE' => '(6).pdf',
      ),
    ),
  ),

  'IRC' => array(
    'display-name' => 'International Residential Code',
    '2000 & 2003' => array(
      'filename-prefix' => 'IRC-2000-2003-Figure-R301-2-2-',
      'Coterminous US' => array(
        'Seismic Design Categories' => '48states.pdf',
      ),
      'Alaska' => array(
        'Seismic Design Categories' => 'AK.pdf',
      ),
      'Hawaii' => array(
        'Seismic Design Categories' => 'HI.pdf',
      ),
    ),
    '2004 (Supplement)' => array(
      'filename-prefix' => 'IRC-2004-Figure-R301-2-2-',
      'Coterminous US' => array(
        'Seismic Design Categories' => '48states.pdf',
      ),
      'Alaska' => array(
        'Seismic Design Categories' => 'AK.pdf',
      ),
      'Hawaii' => array(
        'Seismic Design Categories' => 'HI.pdf',
      ),
    ),
    '2006 & 2009' => array(
      'filename-prefix' => 'IRC-2006-Figure-R301-2-2-',
      'Coterminous US' => array(
        'Seismic Design Categories' => '48states.pdf',
      ),
      'Alaska' => array(
        'Seismic Design Categories' => 'AK.pdf',
      ),
      'Hawaii' => array(
        'Seismic Design Categories' => 'HI.pdf',
      ),
      'Puerto Rico, Virgin Islands' => array(
        'Seismic Design Categories' => 'PRVI.pdf',
      ),
    ),
  ),

  'NEHRP' => array(
    'display-name' => 'NEHRP Provisions',
    '1997 & 2000' => array(
      'filename-prefix' => 'NEHRP-1997-2000-Map-',
      'Conterminous US' => array(
        '0.2s MCE' => '01-us.pdf',
        '1.0s MCE' => '02-us.pdf',
        '0.2s 10% Probability of Exceedance' => '25-us.pdf',
        '1.0s 10% Probability of Exceedance' => '26-us.pdf',
        '0.2s 2% Probability of Exceedance' => '27-us.pdf',
        '1.0s 2% Probability of Exceedance' => '28-us.pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '17-ak.pdf',
        '1.0s MCE' => '18-ak.pdf',
      ),
      'California/Nevada' => array(
        '0.2s MCE' => '03-canv.pdf',
        '1.0s MCE' => '04-canv.pdf',
        '0.2s 10% Probability of Exceedance' => '29-canv.pdf',
        '1.0s 10% Probability of Exceedance' => '30-canv.pdf',
        '0.2s 2% Probability of Exceedance' => '31-canv.pdf',
        '1.0s 2% Probability of Exceedance' => '32-canv.pdf',
      ),
      'Guam, Tutuilla' => array(
        '0.2s MCE' => '23-gu.pdf',
        '1.0s MCE' => '24-gu.pdf',
      ),
      'Hawaii' => array(
        '0.2s MCE' => '19-hi.pdf',
        '1.0s MCE' => '20-hi.pdf',
      ),
      'Intermountain West' => array(
        '0.2s MCE' => '11-slc.pdf',
        '1.0s MCE' => '12-slc.pdf',
      ),
      'New Madrid Seismic Zone' => array(
        '0.2s MCE' => '13-nm.pdf',
        '1.0s MCE' => '14-nm.pdf',
      ),
      'Pacific Northwest' => array(
        '0.2s MCE' => '09-nw.pdf',
        '1.0s MCE' => '10-nw.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s MCE' => '21-pr.pdf',
        '1.0s MCE' => '22-pr.pdf',
      ),
      'San Francisco Bay Area' => array(
        '0.2s MCE' => '07-sfbay.pdf',
        '1.0s MCE' => '08-sfbay.pdf',
      ),
      'South Carolina' => array(
        '0.2s MCE' => '15-ch.pdf',
        '1.0s MCE' => '16-ch.pdf',
      ),
      'Southern California' => array(
        '0.2s MCE' => '05-sca.pdf',
        '1.0s MCE' => '06-sca.pdf',
      ),
    ),
    '2003' => array(
      'filename-prefix' => 'NEHRP-2003-Figure3.3-',
      'Conterminous US' => array(
        '0.2s MCE' => '01.pdf',
        '1.0s MCE' => '02.pdf',
        'Long-Period Transition' => '16.pdf',
      ),
      'Alaska' => array(
        '0.2s MCE' => '11.pdf',
        '1.0s MCE' => '12.pdf',
        'Long-Period Transition' => '18.pdf',
      ),
      'California/Nevada' => array(
        'extra' => 'Region 1',
        '0.2s MCE' => '03.pdf',
        '1.0s MCE' => '04.pdf',
        'Long-Period Transition' => '17.pdf',
      ),
      'Guam, Tutuilla' => array(
        '0.2s, 1.0s MCE' => '14.pdf',
        'Long-Period Transition' => '20&21.pdf',
      ),
      'Hawaii' => array(
        '0.2s, 1.0s MCE' => '10.pdf',
        'Long-Period Transition' => '19.pdf',
      ),
      'New Madrid Seismic Zone' => array(
        'extra' => 'Region 3',
        '0.2s MCE' => '07.pdf',
        '1.0s MCE' => '08.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s, 1.0s MCE' => '13.pdf',
        'Long-Period Transition' => '20&21.pdf',
      ),
      'South Carolina' => array(
        'extra' => 'Region 4',
        '0.2s, 1.0s MCE' => '09.pdf',
      ),
      'Wasatch' => array(
        'extra' => 'Region 2',
        '0.2s MCE' => '05.pdf',
        '1.0s MCE' => '06.pdf',
      ),
    ),
    '2009' => array(
      'filename-prefix' => '2009_NEHRP_Figure_22-',
      'Conterminous US' => array(
        '0.2s 2% Probability of Exceedance' => '1-page1.pdf',
        '1.0s 2% Probability of Exceedance' => '2-page1.pdf',
        '0.2s Mapped Risk Coefficient' => '3-page1.pdf',
        '1.0s Mapped Risk Coefficient' => '4-page1.pdf',
        '0.2s Deterministic Ground Motions' => '5-page1.pdf',
        '1.0s Deterministic Ground Motions' => '6-page1.pdf',
        'Long-Period Transition' => '7-page1.pdf',
        'PGA' => '8.pdf',
      ),
      'Alaska' => array(
        '0.2s 2% Probability of Exceedance' => '1-page2.pdf',
        '1.0s 2% Probability of Exceedance' => '2-page2.pdf',
        '0.2s Mapped Risk Coefficient' => '3-page2.pdf',
        '1.0s Mapped Risk Coefficient' => '4-page2.pdf',
        '0.2s Deterministic Ground Motions' => '5-page2.pdf',
        '1.0s Deterministic Ground Motions' => '6-page2.pdf',
        'Long-Period Transition' => '7-page2.pdf',
        'PGA' => '9.pdf',
      ),
      'Hawaii' => array(
        '0.2s 2% Probability of Exceedance' => '1-page2.pdf',
        '1.0s 2% Probability of Exceedance' => '2-page2.pdf',
        '0.2s Mapped Risk Coefficient' => '3-page2.pdf',
        '1.0s Mapped Risk Coefficient' => '4-page2.pdf',
        '0.2s Deterministic Ground Motions' => '5-page2.pdf',
        '1.0s Deterministic Ground Motions' => '6-page2.pdf',
        'Long-Period Transition' => '7-page2.pdf',
        'PGA' => '10.pdf',
      ),
      'Puerto Rico, U.S. Virgin Islands' => array(
        '0.2s 2% Probability of Exceedance' => '1-page2.pdf',
        '1.0s 2% Probability of Exceedance' => '2-page2.pdf',
        '0.2s Mapped Risk Coefficient' => '3-page2.pdf',
        '1.0s Mapped Risk Coefficient' => '4-page2.pdf',
        '0.2s Deterministic Ground Motions' => '5-page2.pdf',
        '1.0s Deterministic Ground Motions' => '6-page2.pdf',
        'Long-Period Transition' => '7-page2.pdf',
        'PGA' => '11.pdf',
      ),
    ),
  ),
);

function outputCodesList($shown_editions, $format = 'normal') {
  foreach ($GLOBALS['DESIGNMAPS_KEY'] as $code_name => $code_contents) {
    if (!isset($shown_editions[$code_name])) continue;

    outputCodeListing(
      $code_name,
      array_intersect_key(
        $code_contents,
        array_flip($shown_editions[$code_name]) + array('display-name' => 1)
      ),
      $format
    );
  }
}

function outputCodeListing($code_name, $code_contents, $format = 'normal') {
  if ($format == 'condensed') {
    echo '<h4>' .
      htmlspecialchars($code_contents['display-name']) . '</h4><ul class="no-style">';
  } else {
    echo '<div class="section"><h2>' .
      htmlspecialchars($code_contents['display-name']) . '</h2><ul class="no-style">';
  }

  foreach ($code_contents as $edition => $edition_contents) {
    if ($edition == 'display-name') continue;
    echo '<li><a href="' . '/hazards/designmaps/pdfs/?code=' .
      urlencode($code_name) . '&edition=' . urlencode($edition) .
      '">' . htmlspecialchars($edition) . '</a></li>';
  }

  echo '</ul>';

  if ($format != 'condensed') {
    echo '</div>';
  }
}
