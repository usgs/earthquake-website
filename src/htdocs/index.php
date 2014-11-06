<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Home Page';
	$HEAD = '<link rel="stylesheet" href="index.css"/>';
	include 'template.inc.php';
}

?>

<div class="page-content">
<?php

include_once '_features.inc.php';
echo $EQ_FEATURES->toHtml(3);

?>

	<section class="row">
		<ul class="quicklinks row">
			<li class="column one-of-two">
				<a title="Earthquakes" href="/earthquakes/">
					<span class="icon icon-earthquakes"></span>
					<h3>Earthquakes</h3>
					<p>
						Information about real-time earthquakes, online catalog search of
						archives, seismicity maps and statistics.
					</p>
				</a>
			</li>

			<li class="column one-of-two">
				<a title="Hazards" href="/hazards/">
					<span class="icon icon-hazards"></span>
					<h3>Hazards</h3>
					<p>
						US faults, information about seismic hazards in various areas,
						tools for seismic design values.
					</p>
				</a>
			</li>

			<li class="column one-of-two">
				<a title="Learn" href="/learn/">
					<span class="icon icon-learn"></span>
					<h3>Learn</h3>
					<p>
						The science of earthquakes, FAQ, glossary, links to earthquake
						topics, Earthquakes for kids.
					</p>
				</a>
			</li>

			<li class="column one-of-two">
				<a title="Prepare" href="/prepare/">
					<span class="icon icon-prepare"></span>
					<h3>Prepare</h3>
					<p>
						What should you do to be prepared for an earthquake?
					</p>
				</a>
			</li>

			<li class="column one-of-two">
				<a title="Monitoring" href="/monitoring/">
					<span class="icon icon-monitoring"></span>
					<h3>Monitoring</h3>
					<p>
						Global, national and regional networks recording earthquakes and
						crustal movements, maps, station information, real-time seismic
						waveforms.
					</p>
				</a>
			</li>

			<li class="column one-of-two">
				<a title="Research" href="/research/">
					<span class="icon icon-research"></span>
					<h3>Research</h3>
					<p>
						Research projects in the Earthquake Hazards Program, external
						research support, science center activities, software.
					</p>
				</a>
			</li>
		</ul>
	</section>

	<section class="row nehrp">
		<img src="/images/nehrp.png" alt="NEHRP logo" />
		<p>
			The USGS Earthquake Hazards Program is part of the
			<a href="http://www.nehrp.gov/" target="_blank">National Earthquake
			Hazards Reduction Program</a> (NEHRP), established by Congress in 1977.
			We monitor and report earthquakes, assess earthquake impacts and hazards,
			and research the causes and effects of earthquake.
		</p>
	</section>

</div>
