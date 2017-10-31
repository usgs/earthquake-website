<?php
//  Archived on Oct 26, 2017
//  https://earthquake.usgs.gov/hazards/urban/ceus-regional.php
//	Author:	Tiffany Kalin
//	Contact: Mark Peterson
if	(!isset($TEMPLATE))	{
  $TITLE	=	'New Madrid Seismic Zone, Wabash Valley Seismic Zone, and Shoal Creek/Southern Illinois Basin Scenarios';
  $NAVIGATION	= true;
  include	'template.inc.php';
}
?>

<figure class="right">
  <img style="margin-right: 1em;" src="images/nmsz.jpg" alt="New Madrid Seismic Zone hazard map"/>
</figure>
<div style="background-color: #F5F5F5; padding: 1em;">
  The regional maps available here are derived in much the same way
  as the urban seismic hazard maps,
  with both including the effects of shallow geologic structure on estimated ground shaking.&nbsp;
  The regional maps show the varying levels of ground shaking expected for specific hypothetical
  or 'scenario' earthquakes, both in terms of ground
  <a href="/learning/glossary.php?term=acceleration">accelerations</a> and their effects measured
  in <a href="/learning/glossary.php?term=intensity">'intensity'</a> units.
  The calculations underlying these regional maps employ the same methodology and
  input information as in the national and urban seismic hazard maps, except
  for the shallow geologic structure and the specific parameters describing each earthquake.
  The sources of the geologic information are provided below and each map lists
  the earthquake parameters specific to that map.
</div>

<h2>Graphic and HAZUS formats</h2>
<div class="row">
  <div class="column one-of-three">

    <a name="nmsz"></a>
    <h3>for New Madrid Seismic Zone scenarios</h3>
    <p>
      MMI Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the northeast linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_ne_mmi.gif" target="_blank">gif</a>
    </p>
    <p>
      PGA Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the northeast linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_ne_pga.gif" target="_blank">gif</a>
    </p>
    <p>
      1.0 sec Spectral Acceleration Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the northeast linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_ne_a10.gif" target="_blank">gif</a>
    </p>
    <p>
      0.3 sec Spectral Acceleration Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the northeast linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_ne_a03.gif" target="_blank">gif</a>
    </p>
    <p>
      <a href="/static/web/nshm/urban/memphis/download/HAZUS/NM-NE_HAZUS.zip">HAZUS input</a> for this scenario with MMI, PGA, PGV, 1.0 sec and 0.3 sec Spectral Acceleration.<br />
      <i><small>Hazus data can also be used in ArcGIS.</small></i>
    </p>

    <p>
      MMI Hazard for a M7.7 earthquake located northwest of Memphis, on a fault coincident with the southwest linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_sw_mmi.gif" target="_blank">gif</a>
    </p>
    <p>
      PGA Hazard for a M7.7 earthquake located northwest of Memphis, on a fault coincident with the southwest linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_sw_pga.gif" target="_blank">gif</a>
    </p>
    <p>
      1.0 sec Spectral Acceleration Hazard for a M7.7 earthquake located northwest of Memphis, on a fault coincident with the southwest linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_sw_a10.gif" target="_blank">gif</a>
    </p>
    <p>
      0.3 sec Spectral Acceleration Hazard for a M7.7 earthquake located northwest of Memphis, on a fault coincident with the southwest linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_sw_a03.gif" target="_blank">gif</a>
    </p>
    <p>
      <a href="/static/web/nshm/urban/memphis/download/HAZUS/NM-SW_HAZUS.zip">HAZUS input</a> for this scenario with MMI, PGA, PGV, 1.0 sec and 0.3 sec Spectral Acceleration.<br />
      <i><small>Hazus data can also be used in ArcGIS.</small></i>
    </p>
    <p>
      MMI Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the central linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_rt_mmi.gif" target="_blank">gif</a>
    </p>
    <p>
      PGA Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the central linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_rt_pga.gif" target="_blank">gif</a>
    </p>
    <p>
      1.0 sec Spectral Acceleration Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the central linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_rt_a10.gif" target="_blank">gif</a>
    </p>
    <p>
      0.3 sec Spectral Acceleration Hazard for a M7.7 earthquake located north of Memphis, on a fault coincident with the central linear zone of modern seismicity, geology included: <a href="/static/web/nshm/urban/memphis/download/regional/nm_rt_a03.gif" target="_blank">gif</a>
    </p>
    <p>
      <a href="/static/web/nshm/urban/memphis/download/HAZUS/NM-RT_HAZUS.zip">HAZUS input</a> for this scenario with MMI, PGA, PGV, 1.0 sec and 0.3 sec Spectral Acceleration.<br />
      <i><small>Hazus data can also be used in ArcGIS.</small></i>
    </p>
  </div>

  <div class="column one-of-three">
    <a name="wvsz"></a>
    <h3>for Wabash Valley Seismic Zone scenario</h3>
    <p>
      MMI Hazard for a M7.1 earthquake located in an area coincident with liquefaction features near Vincennes IN, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/w71_mmi.gif" target="_blank">gif</a>
    </p>
    <p>
      PGA Hazard for a M7.1 earthquake located in an area coincident with liquefaction features near Vincennes IN, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/w71_pga.gif" target="_blank">gif</a>
    </p>
    <p>
      1.0 sec Spectral Acceleration Hazard for a M7.1 earthquake located in an area coincident with liquefaction features near Vincennes IN, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/w71_a10.gif" target="_blank">gif</a>
    </p>
    <p>
      0.3 sec Spectral Acceleration Hazard for a M7.1 earthquake located in an area coincident with liquefaction features near Vincennes IN, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/w71_a03.gif" target="_blank">gif</a>
    </p>
    <p>
      <a href="/static/web/nshm/urban/memphis/download/HAZUS/WABASH_m71.zip">HAZUS input</a> for this scenario with MMI, PGA, PGV, 1.0 sec and 0.3 sec Spectral Acceleration.<br />
      <i><small>Hazus data can also be used in ArcGIS.</small></i>
    </p>
  </div>

  <div class="column one-of-three">
    <a name="scil"></a>
    <h3>for Shoal Creek/Southern Illinois Basin scenario</h3>

    <p>
      MMI Hazard for a M6.0 earthquake located in an area coincident with liquefaction features east of St. Louis MO, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/sc60_mmi.gif" target="_blank">gif</a>
    </p>
    <p>
      PGA Hazard for a M6.0 earthquake located in an area coincident with liquefaction features east of St. Louis MO, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/sc60_pga.gif" target="_blank">gif</a>
    </p>
    <p>
      1.0 sec Spectral Acceleration Hazard for a M6.0 earthquake located in an area coincident with liquefaction features east of St. Louis MO, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/sc60_a10.gif" target="_blank">gif</a>
    </p>
    <p>
      0.3 sec Spectral Acceleration Hazard for a M6.0 eearthquake located in an area coincident with liquefaction features east of St. Louis MO, geology included: <a href="/static/web/nshm/urban/memphis/download/graphic/scenarios/sc60_a03.gif" target="_blank">gif</a>
    </p>
    <p>
      <a href="/static/web/nshm/urban/memphis/download/HAZUS/SHOALCRK_m60.zip">HAZUS input</a> for this scenario with MMI, PGA, PGV, 1.0 sec and 0.3 sec Spectral Acceleration.<br />
      <i><small>Hazus data can also be used in ArcGIS.</small></i>
    </p>
  </div>

</div>
