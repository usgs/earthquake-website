<?php
// Author: Lisa Wald
// Contact: David Wald, wald@usgs.gov
// Last modified: 03/16/2016

if (!isset($TEMPLATE)) {
  $TITLE = 'PAGER Data, Products and References';
  $NAVIGATION = true;
  $CONTACT = 'PAGER';
  $HEAD = '<link rel="stylesheet" href="references.css"/>';
  include 'template.inc.php';
}

if (!function_exists('cmp')) {
	function cmp(&$a, &$b) {
		// 10/03/11 -- EMM: Per Kishor : Sort by last name of principle author,
		// then by publication year.
		preg_match('/^([^,]+),/', $a['authors'], $matches);
		$a_val = $matches[1];

		preg_match('/^([^,]+),/', $b['authors'], $matches);
		$b_val = $matches[1];

		$val = strcasecmp($a_val, $b_val);
		if ($val === 0) {
			// Try numerical publication year
			$a_val = intval($a['year']);
			$b_val = intval($b['year']);

			// Special case for "in prep" value
			if ($a_val === 0) { return 1; }
			if ($b_val === 0) { return -1; }

			$val = $a_val - $b_val;
			if ($val === 0) {
				// Try lexicographical publication year (a, b, c, etc...)
				$a_val = $a['year'];
				$b_val = $b['year'];

				$val = strcasecmp($a_val, $b_val);
				if ($val === 0) {
					// Still 0. Just say that "a" wins so this is a stable sort.
					$val = 1;
				}
			}
		}
		return $val;
	}
}

$references = array();

$references['AllenWald2009'] = array(
	'key' => 'AllenWald2009',
	'link' => 'http://pubs.usgs.gov/of/2009/1047/',
	'authors' => 'Allen, T.I., and D.J. Wald',
	'year' => '2009',
	'title' => 'Evaluation of ground-motion modeling techniques for use in ' .
	'Global ShakeMap &ndash; A critique of instrumental ground-motion ' .
	'prediction equations, peak ground motion to macroseismic intensity ' .
	'conversions and macroseismic intensity predictions in different ' .
	'tectonic settings',
	'source' => 'U.S. Geological Survey Open-File Report 2009-1047, 114 p.'
);
$references['AllenEtAl2009'] = array(
	'key' => 'AllenEtAl2009',
	'link' => 'prodandref/AllenEtAlPAGERCAT.pdf',
	'authors' => 'Allen, T. I., K. D. Marano, P. S. Earle, and D. J. Wald',
	'short' => 'Allen, T. I. et al',
	'year' => '2009',
	'title' => 'PAGER-CAT: A composite earthquake catalog for calibrating ' .
	'global fatality models',
	'source' => 'Seism. Res. Lett 80(1), 57-62. DOI:10.1785/gssrl.80.1.57'
);
$references['AllenWald2007'] = array(
	'key' => 'AllenWald2007',
	'link' => 'http://pubs.usgs.gov/of/2007/1357/',
	'authors' => 'Allen, T. I., and D. J. Wald',
	'year' => '2007',
	'title' => 'Topographic slope as a proxy for seismic site-conditions ' .
	'(VS30) and amplification around the globe',
	'source' => 'U.S. Geological Survey Open-File Report 2007-1357, 69 p.'
);
$references['AllenEtAl2009b'] = array(
	'key' => 'AllenEtAl2009b',
	'link' => 'prodandref/AllenEtAlAtlas.pdf',
	'authors' => 'Allen, T. I., Wald, D.J, Earle, P. S., Marano, K. D., ' .
	'Hotovec, A.J., Lin, K., and Hearne, M',
	'short' => 'Allen, T. I. et al',
	'year' => '2009',
	'title' => 'An Atlas of ShakeMaps and population exposure catalog for ' .
	'earthquake loss modeling',
	'source' => 'Bull. Earthq. Eng., v. 7, DOI: 10.1007/s10518-009-9120-y.'
);
$references['AllenEtAl2008a'] = array(
	'key' => 'AllenEtAl2008a',
	'link' => 'http://pubs.usgs.gov/of/2008/1236/',
	'authors' => 'Allen, T. I., D. J. Wald, A. J. Hotovec, K. Lin, P. S. Earle, and K. D. Marano',
	'short' => 'Allen, T. I. et al',
	'year' => '2008',
	'title' => 'An Atlas of ShakeMaps for selected global earthquakes',
	'source' => 'U.S. Geological Survey Open-File Report 2008-1236, 47 p.'
);
$references['AtkinsonWald2007'] = array(
	'key' => 'AtkinsonWald2007',
	'link' => 'prodandref/AtkinsonWaldDYFI.pdf',
	'authors' => 'Atkinson, G. M., and D. J. Wald',
	'year' => '2007',
	'title' => '"Did You Feel It?" intensity data: A surprisingly good ' .
		'measure of earthquake ground motion',
	'source' => 'Seism. Res. Lett. 78, 362-368.'
);
$references['EarleWald2009'] = array(
	'key' => 'EarleWald2009',
	'link' => 'http://pubs.usgs.gov/of/2009/1131/',
	'authors' => 'Earle, P.S., Wald, D.J., Jaiswal, K.S., Allen, T.I., ' .
		'Marano, K.D., Hotovec, A.J., Hearne, M.G., and Fee, J.M',
	'short' => 'Earle, P.S. et al',
	'year' => '2009',
	'title' => 'Prompt Assessment of Global Earthquakes for Response ' .
		'(PAGER): A system for rapidly determining the impact of global ' .
		'earthquakes worldwide',
	'source' => 'U.S. Geological Survey Open-File Report 2009-1131'
);
$references['EarleEtAl2008'] = array(
	'key' => 'EarleEtAl2008',
	'link' => 'prodandref/Earle_et_al_(2008)_14WCEE_PAGER_Wenchuan.pdf',
	'authors' => 'Earle, P. S., D. J. Wald, T. I. Allen, K. S. Jaiswal, ' .
		'K. A. Porter, and M. G. Hearne',
	'short' => 'Earle, P. S. et al',
	'year' => '2009',
	'title' => 'Rapid exposure and loss estimates for the May 12, 2008 MW ' .
		'7.9 Wenchuan earthquake provided by the U.S. Geological Survey\'s ' .
		'PAGER system',
	'source' => 'Proc. 14th World Conf. Earthqu. Eng. Beijing, China, ' .
		'Paper, 8 pp.'
);
$references['GodtEtAl2008'] = array(
	'key' => 'GodtEtAl2008',
	'link' => 'prodandref/Godt_et_al_(2009)_PAGER_Landslides.pdf',
	'authors' => 'Godt, J., B. Sener, K. Verdin, D. Wald, P. Earle, ' .
		'E. Harp, and R. Jibson',
	'short' => 'Godt, J. et al',
	'year' => '2008',
	'title' => 'Rapid assessment of earthquake-induced landsliding',
	'source' => 'Proceedings of the First World Landslide Forum, United ' .
		'Nations University, Tokyo, Japan, 4 p.'
);
$references['HayesWald2009'] = array(
	'key' => 'HayesWald2009',
	'link' => 'prodandref/HayesWald2009_gji_siga.pdf',
	'authors' => 'Hayes, G. P., and D. J. Wald',
	'year' => '2009',
	'title' => 'Developing framework to constrain the geometry of the ' .
		'seismic rupture plane in subduction zones a priori &mdash; a ' .
		'probabilistic approach',
	'source' => 'Geophys. J. Int., v. 176, p. 951-964.'
);
$references['HayesEtAl2010'] = array(
	'key' => 'HayesEtAl2010',
	'authors' => 'Hayes, G.P., Wald, D.J., and Johnson, R.L',
	'short' => 'Hayes, G.P. et al',
	'year' => 'in prep',
	'title' => 'Introducing Slab1.0, a three-dimensional model of global subduction zone geometries'
);
$references['HayesEtAl2009'] = array(
	'key' => 'HayesEtAl2009',
	'link' => 'prodandref/HayesEtAl_2009_siga2_g3.pdf',
	'authors' => 'Hayes, G. P., Wald, D. J., and Keranen, K',
	'short' => 'Hayes, G.P. et al',
	'year' => '2009',
	'title' => 'Advancing techniques to constrain the geometry of the ' .
		'seismic rupture plane on subduction interfaces a priori: ' .
		'highest order functional fits',
	'source' => 'Geochem. Geophys. Geosyst., 10, Q09006, doi:10.1029/ 2009GC002633.'
);
//references added
$references['HayesEtAl2012'] = array(
	'key' => 'HayesEtAl2012',
	//link needed
	//'link' => '',
	'authors' => 'Hayes, G. P., D. J. Wald, and R. L. Johnson',
	'short' => 'Hayes, et al',
	'year' => '2012',
	'title' => 'Slab1.0: A three-dimensional model of global subduction zone geometries',
	'source' => 'J. Geophys. Res., 117, doi:10.1029/2011JB008524.'
);
$references['JaiswalWald2008a'] = array(
	'key' => 'JaiswalWald2008a',
	'link' => 'prodandref/Jaiswal_Wald_(2008)_14WCEE_PAGER_Inventory.pdf',
	'authors' => 'Jaiswal, K. S., and Wald, D. J.',
	'year' => '2008a',
	'title' => 'Developing a global building inventory for earthquake loss ' .
		'assessment and risk management',
	'source' => 'Proc. 14th World conf. Earthq. Eng., Beijing, China, 8 p.'
);
$references['JaiswalWald2008b'] = array(
	'key' => 'JaiswalWald2008b',
	'link' => 'http://pubs.usgs.gov/of/2008/1160/',
	'authors' => 'Jaiswal, K. S., and Wald, D. J.',
	'year' => '2008b',
	'title' => 'Creating a global building inventory for earthquake loss ' .
		'assessment and risk management',
	'source' => 'U.S. Geological Survey Open-File Report 2008-1160, 103 p.'
);
$references['JaiswalWald_in_prep'] = array( // Roughly 2009 ???
	'key' => 'JaiswalWald_in_prep',
	'authors' => 'Jaiswal, K. S., Wald, D. J.',
	'year' => 'in prep',
	'title' => 'A semi-empirical approach for rapid earthquake casualty ' .
		'and damage estimation',
	'source' => 'U.S. Geological Survey Open-File Report'
);
$references['JaiswalWald2009a'] = array(
	'key' => 'JaiswalWald2009a',
	'link' => 'http://pubs.usgs.gov/of/2009/1136/',
	'authors' => 'Jaiswal, K. S., Wald, D. J., and Hearne, M.',
	'short' => 'Jaiswal, K. S. et al',
	'year' => '2009a',
	'title' => 'Estimating casualties for large worldwide earthquakes using ' .
		'an empirical approach',
	'source' => 'U.S. Geological Survey Open-File Report 2009-1136'
);
$references['JaiswalEtAl2009b'] = array(
	'key' => 'JaiswalEtAl2009b',
	'link' => 'prodandref/Jaiswal_Kishor.pdf',
	'authors' => 'Jaiswal, K. S., Wald, D. J., Earle, P. S., Porter, K. A., ' .
		'and Hearne, M.',
	'short' => 'Jaiswal, K. S. et al',
	'year' => '2009b',
	'title' => 'Earthquake Casualty Models Within the USGS Prompt ' .
		'Assessment of Global Earthquakes for Response (PAGER) System',
	'source' => 'Proceedings of the 2nd International Disaster Casualty ' .
		'Workshop, Cambridge, England, 8 pp.'
);
$references['JaiswalWald2010a'] = array(
	'key' => 'JaiswalWald2010a',
	'link' => 'prodandref/Jaiswal_Wald_Porter_(2010)_PAGER_Building_Inventory_Spectra.pdf',
	'authors' => 'Jaiswal, K. S., Wald, D. J., and Porter, K. A.',
	'year' => '2010a',
	'title' => 'A Global Building Inventory for Earthquake Loss Estimation ' .
		'and Risk Management',
	'short' => 'Jaiswal, K. S. et al',
	'source' => 'Earthquake Spectra.'
);
$references['JaiswalWald2010b'] = array(
	'key' => 'JaiswalWald2010b',
	'link' => 'prodandref/Jaiswal_Wald_2010_Semi.pdf',
	'authors' => 'Jaiswal, K. S., and Wald, D. J.',
	'year' => '2010b',
	'title' => 'Development of a semi-empirical loss model within the USGS ' .
		'Prompt Assessment of Global Earthquakes for Response (PAGER) System',
	'source' => 'Proc. of the 9th US and 10th Canadian Conference on ' .
		'Earthquake Engineering: Reaching Beyond Borders, July 25-29, 2010, ' .
		'Toronto, Canada.'
);
$references['JaiswalWald2010c'] = array(
	'key' => 'JaiswalWald2010c',
	'link' => 'prodandref/Jaiswal_&_Wald_(2010)_Empirical_Fatality_Model.pdf',
	'authors' => 'Jaiswal, K. S., and Wald, D. J.',
	'year' => '2010c',
	'title' => 'An Empirical Model for Global Earthquake Fatality Estimation',
	'source' => 'Earthquake Spectra, 26, No. 4, 1017-1037'
);
$references['JaiswalWald2011'] = array(
	'key' => 'JaiswalWald2011',
	'link' => 'http://pubs.usgs.gov/of/2011/1116/',
	'authors' => 'Jaiswal, K. S., and Wald, D. J.',
	'short' => 'Jaiswal, K.S. and Wald, D.J.',
	'year' => '2011',
	'title' => 'Rapid estimation of the economic consequences of global earthquakes',
	'source' => 'U.S. Geological Survey Open-File Report 2011-1116, 47p.'
);
$references['JaiswalWaldDAyala2011'] = array(
	'key' => 'JaiswalWaldDAyala2011',
	'link' => 'prodandref/Jaiswal_Wald_DAyala_2011_Empirical_Collapse.pdf',
	'authors' => 'Jaiswal, K. S., Wald, D. J., and D&rsquo;Ayala, D.',
	'short' => 'Jaiswal, K.S., Wald, D.J., D&rsquo;Ayala, D.',
	'year' => '2011',
	'title' => 'Developing Empirical Collapse Fragility Functions for Global Building Types',
	'source' => 'Earthquake Spectra, 27, No. 3, 775-795'
);
$references['JiEtAl2004'] = array(
	'key' => 'JiEtAl2004',
	'link' => 'prodandref/Ji_et_al_(2004)_Denali_Spectra.pdf',
	'authors' => 'Ji, C., V. Helmberger, and D. J. Wald',
	'short' => 'Ji, C. et al',
	'year' => '2004',
	'title' => 'A teleseismic study of the 2002, Denali, Alaska, earthquake ' .
		'and implications for rapid strong motion estimation',
	'source' => 'Earthq. Spectra 20, 617-637.'
);
$references['MaranoEtAl'] = array(
	'key' => 'MaranoEtAl',
	'link' => 'prodandref/MaranoEtAlSecondary.pdf',
	'authors' => 'Marano, K. D., D. J. Wald, and T. I. Allen',
	'short' => 'Marano, K. D. et al',
	'year' => '2009',
	'title' => 'Global earthquake casualties due to secondary effects: a ' .
		'quantitative analysis for improving rapid loss analyses',
	'source' => 'Nat. Hazards., v. 49, DOI: 10/1007/s11069-009-9372-5.'
);
$references['PorterEtAl2008a'] = array(
	'key' => 'PorterEtAl2008a',
	'link' => 'prodandref/Porter_et_al_(2008)_14WCEE_PAGER_Loss_Models.pdf',
	'authors' => 'Porter, K., K. Jaiswal, D. Wald, P. Earle, and M. Hearne',
	'short' => 'Porter, K. et al',
	'year' => '2008',
	'title' => 'Fatality models for the U.S. Geological Survey\'s Prompt ' .
		'Assessment of Global Earthquakes for Response (PAGER) system',
	'source' => 'Proc. 14th World Conf. Earthq. Eng., Beijing, China, 8 pp.'
);
$references['Porter2008'] = array(
	'key' => 'Porter2008',
	'authors' => 'Porter, K. A.',
	'year' => '2009',
	'title' => 'Cracking an open safe: HAZUS vulnerability functions in ' .
		'terms of structure&mdash;independent spectral acceleration',
	'source' => 'Earthq. Spectra., v. 25, n. 2, p. 361-378.'
);
$references['PorterEtAl2008b'] = array(
	'key' => 'PorterEtAl2008b',
	'link' => 'prodandref/Porter_et_al_(2008)_14WCEE_WHE-PAGER.pdf',
	'authors' => 'Porter, K. A., K. S. Jaiswal, D. J. Wald, M. Green, ' .
		'and C. Comartin',
	'short' => 'Porter, K. et al',
	'year' => '2008',
	'title' => 'WHE-PAGER Project: a new initiative in estimating global ' .
		'building inventory and its seismic vulnerability',
	'source' => 'Proc. 14th World Conf. Earthq. Eng., Beijing, China, 8 pp.'
);
$references['VerdinEtAl2007'] = array(
	'key' => 'VerdinEtAl2007',
	'link' => 'http://pubs.usgs.gov/of/2007/1188/',
	'authors' => 'Verdin, K. L., J. Godt, C. Funk, D. Pedredos, ' .
		'B. Worstell, and J. Verdin',
	'short' => 'Verdin, K. et al',
	'year' => '2007',
	'title' => 'Development of a global slope dataset for estimation of ' .
		'landsllide occurrence resulting from earthquakes',
	'source' => 'U.S. Geological Survey Open-File Report 2007-1188, 25 p.'
);
$references['WaldDewey2005'] = array(
	'key' => 'WaldDewey2005',
	'link' => 'http://pubs.usgs.gov/fs/2005/3016/',
	'authors' => 'Wald, D., and J. Dewey',
	'year' => '2005',
	'title' => 'Did You Feel It? Citizens contribute to earthquake science',
	'source' => 'U.S. Geological Survey Fact Sheet FS-2005-3016, 4p.'
);
$references['WaldAllen2007'] = array(
	'key' => 'WaldAllen2007',
	'link' => 'prodandref/Wald_Allen_(2007)_BSSA_TopoSlope.pdf',
	'authors' => 'Wald, D. J., and T. I. Allen',
	'year' => '2007',
	'title' => 'Topographic slope as a proxy for seismic site conditions ' .
		'and amplification',
	'source' => 'Bull. Seism. Soc. Am. 97, 1379-1395.'
);
$references['WaldEtAl2010'] = array(
	'key' => 'WaldEtAl2010',
	'link' => 'http://pubs.usgs.gov/fs/2010/3036/',
	'authors' => 'Wald, D.J., Jaiswal, K.S., Marano, K.D., Bausch, D.B., and Hearne, M.G',
	'short' => 'Wald, D.J. et al',
	'year' => '2010',
	'title' => 'PAGER &mdash; Rapid assessment of an earthquake’s impact',
	'source' => ' U.S. Geological Survey Fact Sheet 2010–3036, 4 p.'
);
$references['WaldEtAl2011b'] = array(
	'key' => 'WaldEtAl2011b',
	'link' => 'prodandref/Wald_et_al_2011_EarthquakeImpactScale_NHR.pdf',
	'authors' => 'Wald, D. J., Jaiswal, K. S., Marano, K. D., and Bausch, D. B.',
	'short' => 'Wald, D.J. et al',
	'year' => '2011',
	'title' => 'An Earthquake Impact Scale',
	'source' => 'Natural Hazards Review, v. 12, 125-139.'
);
//References added
$references['WordenEtAl2010'] = array(
	'key' => 'WordenEtAl2010',
	'authors' => 'Worden, C. B., D. J. Wald, K. Lin, G. Cua, and D. Garcia',
	'short' => 'Worden et al.',
	'year' => '2010',
	'title' => 'A revised ground-motion and intensity interpolation scheme for ShakeMap',
	'source' => 'Bull. Seism. Soc. Am., 100, 3083-3096.'
);
$references['WaldEtAl2009b'] = array(
	'key' => 'WaldEtAl2009b',
	'link' => 'prodandref/WaldEtAlPAGERAdvances.pdf',
	'authors' => 'Wald, D. J., K. Jaiswal, K. Marano, P. Earle, ' .
		'and T. I. Allen',
	'short' => 'Wald, D.J. et al',
	'year' => '2009',
	'title' => 'Advancements in Casualty Modeling Facilitated by the USGS ' .
		'Prompt Assessment of Global Earthquakes for Response (PAGER) System',
	'source' => 'Proceedings of the 2nd International Disaster Casualty ' .
		'Workshop, Cambridge, England. 8 pp.'
);
$references['WaldEtAl2009'] = array(
	'key' => 'WaldEtAl2009',
	'link' => 'prodandref/Wald_David2.pdf',
	'authors' => 'Wald, D. J., Jaiswal, K. S., Marano, K. D., and Bausch, D',
	'short' => 'Wald, D.J. et al',
	'year' => '2009',
	'title' => 'Developing Casualty and Impact Alert Protocols Based on the ' .
		'USGS Prompt Assessment of Global Earthquakes for Response (PAGER) ' .
		'System',
	'source' => 'Proceedings of the 1st International Disaster Casualty ' .
		'Workshop, Cambridge, England. 10 pp.'
);
$references['WaldEtAl2006a'] = array(
	'key' => 'WaldEtAl2006a',
	'link' => 'prodandref/Wald_et_al_(2006)_BERI_PAGER.pdf',
	'authors' => 'Wald, D. J., P. S. Earle, K. Lin, V. Quitoriano, and B. ' .
		'Worden',
	'short' => 'Wald, D.J. et al',
	'year' => '2006',
	'title' => 'Challenges in rapid ground motion estimation for the prompt ' .
		'assessment of global urban earthquakes',
	'source' => 'Bull. Earthq. Res. Inst. 81, 272-281.'
);
$references['WaldEtAl2008a'] = array(
	'key' => 'WaldEtAl2008a',
	'link' => 'prodandref/Wald_et_al_(2008)_14WCEE_PAGER.pdf',
	'authors' => 'Wald, D. J., P. S. Earle, T. I. Allen, K. Jaiswal, ' .
		'K. Porter, and M. Hearne',
	'short' => 'Wald, D.J. et al',
	'year' => '2008',
	'title' => 'Development of the U.S. Geological Survey\'s PAGER system ' .
		'(Prompt Assessment of Global Earthquakes for Response)',
	'source' => 'Proc. 14th World Conf. Earthq. Eng., Beijing, China, 8 pp.'
);
$references['WaldEtAl2008b'] = array(
	'key' => 'WaldEtAl2008b',
	'link' => 'http://pubs.usgs.gov/of/2008/1238/',
	'authors' => 'Wald, D. J., K. Lin, and V. Quitoriano',
	'short' => 'Wald, D. J. et al',
	'year' => '2008',
	'title' => 'Quantifying and qualifying ShakeMap uncertainty',
	'source' => 'U.S. Geological Survey Open-File Report 2008-1238, 27 p.'
);
$references['WaldEtAl2006b'] = array(
	'key' => 'WaldEtAl2006b',
	'link' => 'prodandref/WaldEtAlECEESDYFI.pdf',
	'authors' => 'Wald, D. J., V. Quitoriano, and J. W. Dewey',
	'short' => 'Wald, D. J. et al',
	'year' => '2006',
	'title' => 'USGS "Did you feel it?" community internet intensity maps: ' .
		'macroseismic data collection via the internet',
	'source' => 'First European Conference on Earthquake Engineering and ' .
		'Seismology. Geneva, Switzerland, 10 p.'
);
$references['Wald2010'] = array(
	'key' => 'Wald2010',
	// Not sure if the title links to anything
	//'link' => '',
	'authors' => 'Wald, D. J',
	'short' => 'Wald, D. J',
	'year' => '2010',
	'title' => 'PAGER-Rapid Assessment of an Earthquakes Impact',
	'source' => 'in Encyclopedia of solid Earth Geophysics, Harsh Gupta(Ed.),' .
			'Springer, Part 5, 243-245, DOI: 10.1007/978-90-481-8702-7 183.'

);
//added new reference
$references['ThompsonEtAl2012'] = array(
	'key' => 'ThompsonEtAl2012',
	'authors' => 'Thompson, E, and D. J Wald',
	'short' => 'Thompson et al',
	'year' => '2012',
	'title' => 'Developing Vs30 Site-Condition Maps By Combining Observations With' .
			' Geologic And Topographic Constraints',
	'source' => 'Proc. 15th World Conf. on Eq. Eng., Lisbon, 9 pp.'
);
//added new reference
$references['GarciaEtAl2012'] = array(
	'key' => 'GarciaEtAl2012',
	'authors' => 'Garcia, D., D. J. Wald, and M. G. Hearne',
	'short' => 'Garcia et al',
	'year' => '2012',
	'title' => 'A Global Earthquake Discrimination Scheme to Optimize Ground-Motion Prediction Equation Selection',
	'source' => 'Bull Seism. Soc. Am., 102, 185-203.'

);
//added new reference
$references['NowickiEtAl2014'] = array(
	'key' => 'NowickiEtAl2014',
	'authors' => 'Nowicki, M. A., D. J. Wald, M. W. Hamburger, M. Hearne, and E. M. Thompson',
	'short' => 'Nowicki et al.',
	'year' => '2014',
	'title' => 'Development of a Globally Applicable Model for Near Real-Time' .
		' Prediction of Seismically Induced Landslides',
	'source' => 'submitted to Engineering Geology.'
);
//added new reference
$references['Nowicki2013'] = array(
	'key' => 'Nowicki2013',
	'authors' => 'Nowicki, M. A.',
	'short' => 'Nowicki',
	'year' => '2013',
	'title' => 'Development of a Globally Applicable Model for Near Real-Time' .
		' Prediction of Seismically Induced Landslides',
	'source' => 'M.S. Thesis, Univ. of Indiana, Bloomington, 69 pp.'
);
//added new reference
$references['ZhuEtAl2013'] = array(
	'key' => 'ZhuEtAl2013',
	'authors' => 'Zhu, J., L.G. Baise, & E.M. Thompson, D. J. Wald & K. Knudsen',
	'short' => 'Zhu et al.',
	'year' => '2013',
	'title' => 'Predicting the spatial extent of liquefaction from geospatial ' .
			'and earthquake specific parameters',
	'source' => ', International Conference on Structural Safety and Reliability' .
			' (ICOSSAR) June 16-20, 2013 at Columbia University, New York, NY, 8 pp'
);
/*
//New reference with no links or keys to table
$references[''] = array(
	'key' => '',
	'authors' => 'Allen, T.I., D.J. Wald and C.B. Worden',
	'short' => '',
	'year' => '2011',
	'title' => 'Prediction of macroseismic intensities for global active crustal earthquakes',
	'source' => 'Journal of Seismology, 16, 409-433'
);
//new reference with no links or keys to table
$references[''] = array(
	'key' => '',
	'authors' => 'Gavin Hayes, Earle, P., Benz, H., Wald, D. J., Briggs, R., and the USGS/NEIC Earthquake Response Team',
	'short' => '',
	'year' => '2011',
	'title' => '88 hours:  The U.S. Geological Survey National Earthquake Information Center response' .
			' to the March 11, 2011 Mw 9.0 Tohoku earthquake',
	'source'=> 'Seism. Res. Lett., 82 (4), 481-494.'
);
//New reference with no links or keys to table
$references[''] = array(
	'key' => '',
	'authors' => 'Allen, T.I., D.J. Wald and C.B. Worden',
	'short' => '',
	'year' => '2011',
	'title' => 'Prediction of macroseismic intensities for global active crustal earthquakes,',
	'source' => 'Journal of Seismology, 16, 409-433'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'García, D., R.T. Mah, K.L. Johnson, M.G. Hearne, K.D. Marano, K.W. Lin & D.J. Wald, C.B. Worden, E. So, and D. Wald',
        'short' => '',
        'year' => '2012a',
        'title' => 'ShakeMap Atlas 2.0: An Improved Suite of Recent Historical Earthquake ShakeMaps for Global Hazard Analyses and Loss Models,',
        'source' => 'Proc. 15th World Conf. on Eq. Eng., Lisbon, 10p.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Gavin Hayes, Earle, P., Benz, H., Wald, D. J., Briggs, R., and the USGS/NEIC Earthquake Response Team ',
        'short' => '',
        'year' => '2011',
        'title' => '88 hours:  The U.S. Geological Survey National Earthquake Information' .
			' Center response to the March 11, 2011 Mw 9.0 Tohoku earthquake, ',
        'source' => 'Seism. Res. Lett., 82 (4), 481-494.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Jaiswal, K.S.,W. Aspinall, D. Perkins, D. Wald, and K.A. Porter',
        'short' => '',
        'year' => '2012',
        'title' => 'Use of Expert Judgment Elicitation to Estimate Seismic Vulnerability of Selected Building Types,',
        'source' => 'Proc. 15th World Conf. on Eq. Eng., Lisbon, 10 pp.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Jaiswal, K.S., and Wald, D.J. ',
        'short' => '',
        'year' => '2012a',
        'title' => 'Improving PAGER’s Real-time Earthquake Casualty and Loss Estimation Toolkit: A Continuing Challenge, ',
        'source' => 'Proc. 15th World Conf. on Eq. Eng., Lisbon, 10 p.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Jaiswal, K. D. J. Wald, W. Aspinall, A. Kiremidjian, and D. Perkins ',
        'short' => '',
        'year' => '2013',
        'title' => 'Estimating Structural Collapse Fragility of Generic Building Typologies Using Expert Judgment, ',
        'source' => 'International Conference on Structural Safety and Reliability (ICOSSAR) June 16-20, 2013 at' .
			' Columbia University, New York, NY., 8 pp.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Jaiswal, K., and D. J. Wald ',
        'short' => '',
        'year' => '2013',
        'title' => ' Estimating Economic Loss from Earthquakes Using an Empirical Approach, ',
        'source' => 'Earthquake Spectra, 29, No. 1, pages 309–324.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Jaiswal, K.S. and D. J Wald  ',
        'short' => '',
        'year' => '2012',
        'title' => 'Strategies for rapid global earthquake impact estimation: the Prompt Assessment of' .
			' Global Earthquakes for Response (PAGER) system, ',
        'source' => 'Seismic risk analysis, Eds. Tesfamariam, Chapter 31(12).'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Nowicki, M. A.,',
        'short' => 'Nowicki, M. A.',
        'year' => '2013',
        'title' => 'Development of a Globally Applicable Model for Near Real-Time Prediction of Seismically Induced Landslides., ',
        'source' => 'M.S. Thesis, Univ. of Indiana, Bloomington, 69 pp.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Nowicki, M. A., D. J. Wald, M. W. Hamburger, M. Hearne, and E. M. Thompson ',
        'short' => '',
        'year' => '2014',
        'title' => 'Development of a Globally Applicable Model for Near Real-Time Prediction of Seismically Induced Landslides, ',
        'source' => 'submitted to Engineering Geology.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
	'link' => 'http://pubs.usgs.gov/of/2008/1238/',
        'authors' => 'Wald, D. J., K. Lin, and V. Quitoriano ',
        'short' => '',
        'year' => '2008',
        'title' => 'Quantifying and qualifying ShakeMap uncertainty. ',
        'source' => 'U.S. Geological Survey Open-File Report 2008-1238, 27 p.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Wald, D. J., L. McWhirter, E. Thompson, and A. Hering ',
        'short' => '',
        'year' => '2011',
        'title' => 'A New Strategy for Developing Vs30 Maps, ',
        'source' => 'Proc. of the 4th International Effects of Surface Geology on Seismic Motion Symp,, Santa Barbara, 12 pp.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Wald, D.J., V. Quitoriano, C.B. Worden, M. Hopper, and J. W. Dewey ',
        'short' => '',
        'year' => '2011',
        'title' => 'USGS “Did You Feel It?” Internet-based Macroseismic Intensity Maps',
        'source' => 'Annals of Geophysics, 39 pp., 688-709.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Wald, D. J., K. S. Jaiswal, K. D. Marano, E. So, and M. Hearne ',
        'short' => '',
        'year' => '2012',
        'title' => 'Impact-Based Earthquake Alerts with the U.S. Geological Survey’s PAGER System: What's Next?,',
        'source' => 'Proc. 15th World Conf. on Eq. Eng., Lisbon, 11 pp'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Wald, D. J. ',
        'short' => 'Wald, D. J. ',
        'year' => '2013',
        'title' => 'Adding Secondary Hazard and Ground-truth Observations to PAGER's Loss Modeling, ',
        'source' => 'Proc. of the 10th International Conference on Information Systems for Crisis Response and Management, 5 pp.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Worden, C.B., M.C., Gerstenberger, D. A. Rhoades, and D. J. Wald ',
        'short' => '',
        'year' => '2011',
        'title' => 'Probabilistic relationships between peak ground motion and Modified Mercalli intensity, ',
        'source' => 'Bull Seism. Soc. Am., 102, No. 1, pp. 204–221.'
);
//New reference with no links or keys to table
$references[''] = array(
        'key' => '',
        'authors' => 'Zhu, J., D. Daley, L. G. Baise, E. M. Thompson, D. J. Wald, and K. L. Knudsen ',
        'short' => '',
        'year' => '2013',
        'title' => '). A Geospatial Liquefaction Model for Rapid Response and Loss Estimation (2013). ',
        'source' => 'Earthquake Spectra.'
);
*/
# PRODUCTS

$products['PAGEROverview'] = array(
	'key' => 'PAGEROverview',
	'name' => 'PAGER Overview',
	'description' => '',
	'use' => '',
	'references' => array(
		$references['WaldEtAl2010'],
		$references['EarleWald2009'],
		$references['EarleEtAl2008'],
		$references['WaldEtAl2008a'],
		//Added references
		$references['Wald2010'],
		$references['JaiswalWald2010c'],
		$references['JaiswalWald2011']
	)
);
$products['FastFiniteFaults'] = array(
	'key' => 'FastFiniteFaults',
	'name' => 'Fast Finite Faults',
	'description' => 'Rapid (few hours) slip models fo' .
			'r major earthquakes',
	'use' => 'Constrain shaking, tsunami generation, stress changes',
	'references' => array(
		$references['HayesEtAl2010'],
		$references['HayesEtAl2009'],
		$references['HayesWald2009'],
		$references['JiEtAl2004']
	)
);
//New data in earthquake source
$products['SubductionSlabGeometryDatabase'] = array(
	'key' => 'SubductionSlabGeometryDatabase',
	'name' => 'Subduction Slab Geometry Database',
	'link' => '/data/slab/',
	'description' => 'Online daabase of slab interface geometries',
	'use' => 'Constrain source geomery of major subduction earthquakes',
	'references' => array(
		$references['HayesWald2009'],
		$references['HayesEtAl2009'],
		//references added
		$references['HayesEtAl2012']
	)
);
$products['PAGER-CAT'] = array(
	'key' => 'PAGER-CAT',
	'name' => 'PAGER-CAT',
	'link' => 'catalogs/',
	'description' => 'Quality composite earthquake catalog (1900-2006)',
	'use' => 'Source input for ShakeMap Atlas, ExposureCat',
	'references' => array(
		$references['AllenEtAl2009']
	)
);
$products['GlobalSlopeData'] = array(
	'key' => 'GlobalSlopeData',
	'name' => 'Global Slope Data',
	'description' => 'Topographic slope',
	'use' => 'Landslides, Vs30',
	'references' => array(
		$references['VerdinEtAl2007']
	)
);
$products['GlobalVs30Server'] = array(
	'key' => 'GlobalVs30Server',
	'name' => 'Global Vs30 Server',
	'link' => '/hazards/apps/vs30/',
	'description' => 'Vs30 values for the globe',
	'use' => 'Estimating site amplification',
	'references' => array(
		$references['AllenWald2009'],
		$references['AllenWald2007']
	)
);
//Added section
$products['SiteAmplification'] = array(
	'key' => 'SiteAmplification',
	'name' => 'Site Amplification',
	'link' => '/hazards/apps/vs30/',
	'description' => 'Vs30 Maps',
	'use' => 'Estimating site amplification',
	'references' => array(
		$references['ThompsonEtAl2012']
	//	$references['']
	)
);
$products['GlobalDidYouFeelItIntensities'] = array(
	'key' => 'GlobalDidYouFeelItIntensities',
	'name' => 'Global "Did You Feel It?" Intensities',
	'link' => '/dyfi/',
	'description' => 'Rapid intensities from Internet users',
	'use' => 'Constrains ShakeMap and event bias',
	'references' => array(
		$references['AtkinsonWald2007'],
		$references['WaldEtAl2006b'],
		$references['WaldDewey2005']
	)
);
$products['ShakeMapUncertainty'] = array(
	'key' => 'ShakeMapUncertainty',
	'name' => 'ShakeMap Uncertainty',
	'description' => 'Quantitative and qualitative shaking values',
	'use' => 'Computing loss uncertainty',
	'references' => array(
		$references['WaldEtAl2008b'],
		$references['WordenEtAl2010']
	)
);
$products['ShakeMapAtlas'] = array(
	'key' => 'ShakeMapAtlas',
	'name' => 'ShakeMap Atlas',
	'link' => '/earthquakes/shakemap/atlas.php',
	'description' => 'ShakeMap\'s important global earthquakes (1970-present)',
	'use' => 'Scenarios, planning, hazard calculations',
	'references' => array(
		$references['AllenEtAl2009b'],
		$references['AllenEtAl2008a'],
		$references['GarciaEtAl2012']
	)
);
$products['RapidGlobalShakeMaps'] = array(
	'key' => 'RapidGlobalShakeMaps',
	'name' => 'Rapid Global ShakeMaps (GSM)',
	'link' => '/earthquakes/shakemap/list.php?n=global&y=2008',
	'description' => 'Estimated ShakeMaps for all global earthquakes ' .
		'(M &gt; 5.5)',
	'use' => 'Shaking input for loss estimation, decision making',
	'references' => array(
		$references['WaldEtAl2006a'],
		//added reference
		$references['WordenEtAl2010']
	)
);
$products['LandslideHazard'] = array(
	'key' => 'LandslideHazard',
	'name' => 'Landslide Hazard',
	'description' => 'Spatial probability of landslides',
	'use' => 'Secondary loss assessments',
	'references' => array(
		$references['MaranoEtAl']
	)
);
//add new product
$products['LandslideHazard2'] = array(
	'key' => 'LandslideHazard2',
	'name' => 'Landslide Hazard',
	'description' => 'Near Real-Time Estimates of Seismically Induced Landslides',
	'use' => 'Estimating landslide hazards',
	'references' => array(
		$references['GodtEtAl2008'],
		$references['Nowicki2013'],
		$references['NowickiEtAl2014']
	)
);
$products['GroundMotionModeling'] = array(
	'key' => 'GroundMotionModeling',
	'name' => 'Ground Motion Modeling',
	'description' => 'Comparison of ground motion prediction equations',
	'use' => 'Improvement of ShakeMap',
	'references' => array(
		$references['AllenWald2009']
	)
);
//added new product
$products['GMPESelection'] = array(
	'key' => 'GMPESelection',
	'name' => 'GMPE Selection',
	'description' => 'Automatic GMPE selection based on source and tectonic regime',
	'use' => 'Selecting appropriate GMPE for global earthquakes',
	'references' => array(
		$references['GarciaEtAl2012']
	)

);
$products['EXPO-CAT'] = array(
	'key' => 'EXPO-CAT',
	'name' => 'EXPO-CAT',
	'link' => 'catalogs/expocat.php',
	'description' => 'Population exposure to intensity for each Atlas ' .
		'ShakeMap',
	'use' => 'Fatality rates calculations',
	'references' => array(
		$references['AllenEtAl2009']
	)
);
$products['GlobalBuildingInventory'] = array(
	'key' => 'GlobalBuildingInventory',
	'name' => 'Global Building Inventory',
	'description' => 'Country-based data on buildings and collapse rates',
	'use' => 'Country-specific loss estimation',
	'references' => array(
		$references['JaiswalWald2010a'],
		$references['JaiswalWald2008b'],
		$references['JaiswalWald2008a'],
		$references['PorterEtAl2008b']
	)
);
$products['EmpiricalFatalityModel'] = array(
	'key' => 'EmpiricalFatalityModel',
	'name' => 'Empirical Fatality Model',
	'description' => 'Country-specific fatality rates',
	'use' => 'Fatality estimates given exposure',
	'references' => array(
		$references['JaiswalWald2010c'],
		$references['JaiswalWald2009a'],
		$references['PorterEtAl2008a']
	)
);
$products['EmpiricalEconomicLossModel'] = array(
	'key' => 'EmpiricalEconomicLossModel',
	'name' => 'Empirical Economic Loss Model',
	'description' => 'Country-specific economic loss ratios',
	'use' => 'Economic loss estimates given exposure',
	'references' => array(
		$references['JaiswalWald2011']
	)
);
$products['SemiEmpiricalLossModel'] = array(
	'key' => 'SemiEmpiricalLossModel',
	'name' => 'Semi-Empirical Loss Model',
	'description' => 'Country-specific building vulnerability',
	'use' => 'Fatality estimates based on structures',
	'references' => array(
		$references['JaiswalWald_in_prep'],
		$references['JaiswalWaldDAyala2011'],
		$references['JaiswalWald2010b']
	)
);
$products['AnalyticalLossModel'] = array(
	'key' => 'AnalyticalLossModel',
	'name' => 'Analytical Loss Model',
	'description' => 'HAZUS vulnerability functions',
	'use' => 'Structure-dependent loss computations',
	'references' => array(
		$references['Porter2008']
	)
);
$products['LossModelingOverviews'] = array(
	'key' => 'LossModelingOverviews',
	'name' => 'Loss Modeling Overviews',
	'description' => 'Overview(s) of loss modeling',
	'use' => 'Generation of loss estimates',
	'references' => array(
		$references['JaiswalEtAl2009b'],
		$references['WaldEtAl2009b']
	)
);
$products['OnePAGER'] = array(
	'key' => 'OnePAGER',
	'name' => 'OnePAGER',
	'description' => 'Population exposure notifications',
	'use' => 'Post-earthquake decision making',
	'references' => array(
		$references['WaldEtAl2010'],
		$references['WaldEtAl2009b']
	)
);
$products['AlertProtocols'] = array(
	'key' => 'AlertProtocols',
	'name' => 'Alert Protocols',
	'description' => 'Earthquake Impact Scale',
	'use' => 'Alert content and criteria',
	'references' => array(
		$references['WaldEtAl2011b'],
		$references['WaldEtAl2009']
	)
);
//add new product
$products['LiquefactionHazard'] = array(
	'key' => 'LiquefactionHazard',
	'name' => 'Liquefaction Hazard',
	'description' => 'Spatial probability of liquefaction',
	'use' => 'Estimating liquefaction hazards',
	'references' => array(
		$references['ZhuEtAl2013']
	)
);

$productJumps = array();
foreach ($products as $product) {
	$productJumps[] = sprintf('<a href="#%s">%s</a>',
		$product['key'], str_replace(' ', '&nbsp;', $product['name'])
	);
}

// Sections
$sections = array();
$sections['Overview'] = array(
	'name' => 'Overview',
	'products' => array(
		$products['PAGEROverview']
	)
);
$sections['EarthquakeSource'] = array(
	'name' => 'Earthquake Source',
	'products' => array(
		$products['FastFiniteFaults'],
		$products['SubductionSlabGeometryDatabase'],
		$products['PAGER-CAT']
	)
);
$sections['ShakingDistribution'] = array(
	'name' => 'Shaking Distribution',
	'products' => array(
		$products['GlobalSlopeData'],
		$products['GlobalVs30Server'],
		//added new row in table
		$products['SiteAmplification'],
		$products['GlobalDidYouFeelItIntensities'],
		$products['ShakeMapUncertainty'],
		$products['ShakeMapAtlas'],
		$products['RapidGlobalShakeMaps'],
		$products['GroundMotionModeling'],
		$products['GMPESelection']
	)
);
$sections['LossAndImpactEstimation'] = array (
	'name' => 'Loss And Impact Estimation',
	'products' => array(
		$products['EXPO-CAT'],
		$products['GlobalBuildingInventory'],
		$products['EmpiricalFatalityModel'],
		$products['EmpiricalEconomicLossModel'],
		$products['SemiEmpiricalLossModel'],
		$products['AnalyticalLossModel'],
		$products['LossModelingOverviews']
	)
);
//Add New Section
$sections['SecondaryHazards'] = array (
	'name' => 'Secondary Hazards',
	'products' => array(
		$products['LandslideHazard'],
		$products['LandslideHazard2'],
		$products['LiquefactionHazard']
	)
);
$sections['ReportingAndNotifications'] = array (
	'name' => 'Reporting And Notifications',
	'products' => array (
		$products['OnePAGER'],
		$products['AlertProtocols']
	)
);

$content = '';
$alphabeticalList='';
$theader = '<thead><tr>
				<th width="15%">Database/Product</th>
				<th width="25%">Description</th>
				<th width="25%">Use</th>
				<th>References</th>
			</tr></thead>';
uasort($references, 'cmp');

foreach ($references as $reference) {
	$alphabeticalList .= sprintf("\t<li id=\"%s\"><a name=\"%s\"></a>%s (%s). %s%s%s. %s</li>",
			$reference['key'], $reference['key'], $reference['authors'], $reference['year'],
			(array_key_exists('link', $reference))?
				sprintf('<a href="%s">', $reference['link']):'',
			$reference['title'],
			(array_key_exists('link', $reference))?'</a>':'',
			(array_key_exists('source', $reference))?$reference['source']:'');
}
$alphabeticalList = '<ul class="referencelist">' . $alphabeticalList . '</ul>';
$alphabeticalList = '<h2>Alphabetical Reference List</h2>' . $alphabeticalList;

foreach ($sections as $section) {
	$markupRow = '';
	foreach($section['products'] as $product) {
		$buffer = $product['name'];
		if (array_key_exists('link', $product)) {
			$buffer = sprintf('<a href="%s">%s</a>', $product['link'], $buffer);
		}
		$markupItem = '<td>' . $buffer . '</td>';

		$buffer = array_key_exists('description', $product) ? $product['description'] : '';
		$markupItem .= '<td>' . $buffer . '</td>';

		$buffer = array_key_exists('use', $product) ? $product['use'] : '';
		$markupItem .= '<td>' . $buffer . '</td>';

		$buffer = '';
		if (count($product['references']) > 0) {
			$prodRefs = array();
			foreach ($product['references'] as $reference) {
				$key = str_replace(' ', '',
					(array_key_exists('short', $reference)?
					$reference['short']:
					$reference['authors'])
				);
				$prodRefs[$key][] = $reference;
			}
			foreach ($prodRefs as $key => $refs) {
				$buf = sprintf('%s (', array_key_exists('short', $refs[0])?
					$refs[0]['short']:$refs[0]['authors']);
				$refLinkArray = array();
				foreach ($refs as $reference) {
					$refLinkArray[] = sprintf('<a href="#%s">%s</a>',
						$reference['key'],
						$reference['year']
					);
				}
				$buf .= implode($refLinkArray, ', ') . ')';
				$buffer .= '<li id="">' . $buf . '</li>';
			}
			$buffer = '<ol>' . $buffer . '</ol>';
		}
		$markupItem .= '<td>' . $buffer .'</td>';
		$markupRow .= '<tr>' . $markupItem . '</tr>';
	}
	$markupRow = $theader . '<tbody>' . $markupRow . '</tbody>';
	$content .= '<h4>' . $section['name'] . '</h4>';
	$content .= '<table class="ten column referencetable">' . $markupRow . '</table>';
}
$content = '<h2>Products with References</h2>' . $content . $alphabeticalList;
$content = '<div class="ten column referencetable">' . $content . '</div>';
print $content;

?>
