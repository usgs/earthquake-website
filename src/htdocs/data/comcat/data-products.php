<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Data Products';
  $HEAD = '
    <link rel="stylesheet" href="comcat.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<!-- TABLE of CONTENTS -->

<ul>
  <li><a href="#dyfi">Did You Feel It?</a></li>
  <li><a href="#ff">Finite Fault</a></li>
  <li><a href="#fm">Focal Mechanisms</a></li>
  <li><a href="#mt">Moment Tensors</a></li>
  <li><a href="#orig">Origins</a></li>
  <li><a href="#pager">PAGER</a></li>
  <li><a href="#phase">Phase Data</a></li>
  <li><a href="#shake">ShakeMap</a></li>
</ul>

<hr/>

<!-- CONTENTS -->

<ul>
  <li id="dyfi">
        <h2><a href="/data/dyfi/">Did You Feel It?</a></h2>
  </li>

  <li id="ff">
    <h2>Finite Fault</h2>
  </li>

  <li id="fm">
    <h2>Focal Mechanisms</h2>
    <p>
      The focal mechanism image shows a visual representation of the <a href="/education/beachball.php">style of faulting (focal mechanism)</a> derived from the estimated <a href="/learn/glossary/?term=moment%20tensor">moment tensor</a>. Shaded areas show quadrants of the focal sphere in which the P-wave first-motions are away from the source, and unshaded areas show quadrants in which the P-wave first-motions are toward the source. The dots represent the axis of maximum compressional strain (in black, called the "P-axis") and the axis of maximum extensional strain (in white, called the "T-axis") resulting from the earthquake.
    </p>
  </li>

  <li id="mt">
    <h2>Moment Tensors</h2>
    <p>
      A mathematical representation of the movement on a fault during an earthquake. The tensor depends on the source strength and fault orientation. See also <a href="/education/beachball.php">Focal Mechanisms</a>.
    </p>

    <p>
      The moment tensor image shows a visual representation of the <a href="/education/beachball.php">style of faulting (focal mechanism)</a> derived from the estimated <a href="/learn/glossary/?term=moment%20tensor">moment tensor</a>. Shaded areas show quadrants of the focal sphere in which the P-wave first-motions are away from the source, and unshaded areas show quadrants in which the P-wave first-motions are toward the source. The dots represent the axis of maximum compressional strain (in black, called the "P-axis") and the axis of maximum extensional strain (in white, called the "T-axis") resulting from the earthquake.
    </p>

    <dl class="typelist vertical">

      <dt>Mww</dt>
      <dd>
        Moment magnitude derived from a centroid moment tensor (CMT) inversion of the W-phase, a very long period phase (~100 - 1000 s) arriving at the same time as the P-wave. The W-phase is evident between the P- and Surface-waves on broadband displacement records. See http://eost.u-strasbg.fr/wphase/method.html for more details. W-phase solutions can be computed at both regional (~5 to ~20 degrees) and tele seismic (~30 to ~90 degrees) distances, though the majority of solutions are tele seismic. The distance range used is stored in the QuakeML momentTensor object “category” element.
      </dd>

      <dt>Duputel W-phase Catalog</dt>
      <dd>
        A compilation of W-phase centroid moment tensor solutions from Duputel, Rivera, Kanamori and Hayes (Geophys. J. Int. 189, 1125, 2012), and subsequent updates.
      </dd>

      <dt>US W-phase Catalog</dt>
      <dd>
        W-phase centroid moment tensor solutions computed in near real-time at the USGS NEIC.
      </dd>

      <dt>Mwc</dt>
      <dd>
        Moment magnitude derived from a centroid moment tensor inversion of full waveforms (P-wave through surface waves; US author) or long-period body waves and intermediate- to long-period surface waves (gCMT author). Inversions are performed using data at tele seismic distances (~30 to ~90 degrees). The basic methodology for both approaches is described in Dziewonski et al. ( J. Geophys. Res. 86, 2825, 1983). US-Mwc updates are discussed in Kawakatsu (J. Geophys. Res. 94, 12363, 1989), and Polet and Thio (Earth Planets Space 63, 541, 2011). gCMT updates are summarized in Ekström et al. (Phys. Ear. Planet. Int. 200-201, 1, 2012).
      </dd>

      <dt>US-Mwc Catalog (US Contributor)</dt>
      <dd>
        Surface wave centroid moment tensor solutions derived by:
        <ul>
          <li>
            USGS, following the approach of Polet and Thio (Earth Planets Space 63, 541, 2011) – identified with US author, contributor and catalog.
          </li>
          <li>
            The global (previously Harvard) Centroid Moment Tensor project (www.globalcmt.org); whose solutions have been systematically reproduced in the PDE (US contributor and catalog, gCMT or HRV author).
          </li>
        </ul>
      </dd>

      <dt>gCMT-Mwc Catalog (gCMT Contributor)</dt>
      <dd>
        Surface wave centroid moment tensor solutions directly from the gCMT project catalog (Ekström et al.), loaded by the USGS using the NDK format.
      </dd>

      <dt>Mwb</dt>
      <dd>
        Moment magnitude derived from a moment tensor inversion of long-period body-waves (P-, SH- and SR-) at tele seismic distances (~30 to ~90 degrees). The basic methodology for this approach has been modified from Sipkin (1982), and is very similar to that used for regional moment tensors (Mwr), with the exception that Mwb isolates the body-wave phases it inverts rather than using the full waveform.
      </dd>

      <dt>Mwr</dt>
      <dd>
        Moment magnitude derived from a moment tensor inversion of broadband waveforms at regional distances (RMT; distances < 13 degrees), generally used for the analysis of small to moderate size earthquakes (typically Mw 3.5-6.0). Several different approaches are used depending on the Contributor and Author of the RMT:
        <ul>
        	<li>
            US/SLU Author: This approach inverts full waveforms (P-wave through surface waves) for the deviatoric moment tensor using a time-domain inversion scheme, following the approach of Herrmann, Ammon and Benz (Bull. Seis. Soc. Amer. 101, 2609, 2011). The waveforms are interpreted in terms of regionalized models of the Earth’s velocity structure.
          </li>
          <li>
            BRK/PAL Author: Time domain full-waveform inversion of regional data (&lt; 13 degrees) for the complete moment tensor, following Minson and Dreger (Geophys. J. Int. 174, 585-, 2007) and Herrmann and Hutchensen (Tech. Rep. PL-TR-93–2070, Phillips Lab., 1993). As with US solutions, waveforms are interpreted in terms of regional (CA-based) velocity model.
          </li>
          <li>
            Other Contributors/Authors: Several other agencies also contribute regional moment tensor solutions, using techniques and velocity models that may differ from those listed above.
          </li>
        </ul>
      </dd>
    </dl>
  </li>

  <li id="orig">
    <h2>Origins</h2>
  </li>
  <li id="pager">
    <h2><a href="/data/pager/">PAGER</a></h2>
  </li>
  <li id="phase">
    <h2>Phase Data</h2>
  </li>
  <li id="shake">
    <h2><a href="/data/shakemap/">ShakeMap</a></h2>
  </li>
</ul>
