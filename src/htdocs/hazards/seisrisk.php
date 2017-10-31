<?php
// Author: Lisa Wald
// Contact: Mark Peterson,
if (!isset($TEMPLATE)) {
  $TITLE = '';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<p class="alert warning">
  This is an older version of the seismic hazard software.  It was used for earlier versions (pre-1996) of the hazard maps. It was not used for the 1996 or newer hazard maps.
</p>

<h2>Download Software</h2>
<p>We welcome comments relating to:</p>
<ol>
  <li>Implementation on particular computer systems</li>
  <li>Use in regional seismic hazard analysis</li>
  <li>Non-standard use</li>
  <li>Modifications you have made to the program</li>
</ol>

<ul>
  <li><a href="/static/web/nshm/seisrisk.zip">Download SeisRisk III</a> (46MB ZIP)</li>
  <li><a href="/static/web/nshm/seisrisk3mods.zip">Download SeisRisk (as modified by R. LaForge, February 1996)</a> (62KB ZIP)</li>
</ul>

<h2>Background Information</h2>
<p>
  Seisrisk III is the last published version of a series of programs used to
  produce probabilistic earthquake ground motion hazard maps for the United
  States from 1972 to 1992. Though it has been superseded in the US Geological
  Survey by a more flexible program allowing for sources based on smoothing of
  historical seismicity, Seisrisk III is still being used as a teaching tool in
  academia and for hazard mapping in other countries. In the past decade,
  Seisrisk III has been used for hazard mapping in Italy, Turkey, Iran, in the
  Mediterranean countries as a whole, and in the West Indies, for example.
</p>
<p>
  Because of this continuing interest, we are continuing to host the source
  code and references to publications on the structure and the use of Seisrisk
  III, including auxiliary programs for the construction of input. However,
  except for answering a few helpful questions, we are no longer providing
  support or advice for users. We are also hosting a set of program
  modifications to Seisrisk III written by a colleague in the Bureau of
  Reclamation. We are aware that other modifications exist, for instance, one
  version adapted to use intensity and its uncertainties instead of parametric
  ground motions, and another adapted to use non-circular isoseismals for point
  sources. These can be found by diligent search of the internet.
</p>

<h2>Known Issues</h2>
<p>
  We are aware of some known issues with the software however we have no plans
  to fix any of the following or other issues:
</p>
<ul>
<li>
  A &ldquo;bug fix&rdquo; exists that has not yet been incorporated in any
  published version of SEISRISK III. This fix is to ensure a proper
  interpolation for values which involve the &ldquo;last box&rdquo; in the
  ground-motion annual-rate accumulators. This bug does not usually cause a
  problem, because most users scale the ground motions such that the
  interpolation primarily is taking place in the lower range of accumulator
  boxes.
</li>
<li>
  A &ldquo;loose end&rdquo; exists in subroutine inside. The subroutine has a
  trap which does not permit a calculation when a site point lies too close to
  a quadrilateral corner point. When such a point is discovered in the course
  of a run, the run is terminated. If this happens, it is easy to adjust the
  &ldquo;equator&rdquo; by a very slight amount, thus moving the site point
  away from the corner point. Because rather a good deal of calculation can go
  past before such a site is discovered by the program, it would be desirable
  to permit the program to continue rather than terminate. We have not worked
  on a version to do this, because we encounter the problem rather infrequently
  in our usage. However, users with complex sources or small site-grid spacing
  may find the simple adjustment merely induces a failure at a different site.
</li>
</ul>

<h2>Disclaimer</h2>
<p class="disclaimer">
  Although this software has been used by the U.S. Geological Survey, no
  warranty, expressed or implied is made by the USGS as to the accuracy and
  functioning of the programs and related program material nor shall the
  fact of distribution constitute any such warranty, and no responsibility
  is assumed by the USGS in connection therewith.
</p>
