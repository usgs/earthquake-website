<?php
// Author: Lisa Wald
// Contact: Paul Earle
  if (!isset($TEMPLATE)) {
    $TITLE = 'Magnitude Types';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<table>
  <thead>
    <tr>
      <th>Magnitude type</th>
      <th>Magnitude Range</th>
      <th>Distance Range</th>
      <th>Equation</th>
      <th>Comments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Duration (Md or md)</td>
      <td>&lt; 4</td>
      <td>0 - 400 km</td>
      <td>
        Based on the duration of shaking as measured by the time
        decay of the amplitude of the seismogram.  Often used to
        compute magnitude from seismograms with
        &ldquo;clipped&rdquo; waveforms due to limited dynamic
        recording range of analog instrumentation, which makes it
        impossible to measure peak amplitudes.                   </td>
    </tr>
    <tr>
      <td>Local (ML Ml, or ml)</td>
      <td>2 - 7.5</td>
      <td>0 - 600 km</td>
      <td>
        The original magnitude relationship defined by Richter and
        Gutenberg for local earthquakes in 1935. It is based on the
        maximum amplitude of a seismogram recorded on a
        Wood-Anderson torsion seismograph. Although these
        instruments are no longer widely in use, ML values are
        calculated using modern instrumentation with appropriate
        adjustments.                   </td>
    </tr>
    <tr>
      <td>Short-period surface wave (mb_Lg, mb_lg, or MLg)</td>
      <td>3.5 - 7</td>
      <td>150 – 1100 km</td>
      <td>
        A magnitude for regional earthquakes based on the amplitude
        of the Lg surface waves as recorded on short-period
        instruments.                   </td>
    </tr>
    <tr>
      <td>Short-period body wave (mb)</td>
      <td>4 - 7</td>
      <td>15 - 100 degrees </td>
      <td>
      <td>
        Based on the amplitude of P body-waves as recorded on
        short-period instruments that are most sensitive to waves
        with a period of about 1 s.                   </td>
    </tr>
    <tr>
      <td>Twenty-second surface wave (Ms or Ms_20)</td>
      <td>5 - 8.5</td>
      <td>20 - 160 degrees</td>
      <td>
        A magnitude for distant earthquakes based on the amplitude
        of Rayleigh surface waves measured at a period near 20 sec.                   </td>
    </tr>
    <tr>
      <td>Moment (generic notation Mw or mw.  Specific types denoted
      Mwb or mwb, Mwc or mwc, Mwr or mwr, and Mww or mww)</td>                   <td>&gt; 3.5</td>
      <td>all</td>
      <td>
        Based on the scalar seismic-moment of the earthquake, as
        determined by a moment-tensor inversion. Mwb – Mw based on
        moment tensor inversion of long-period (~10 - 100 s)
        body-waves (P- and SH).  Mwc -- Moment magnitude derived
        from a centroid moment tensor inversion of intermediate- and
        long-period body- and surface-waves.  Mwr -- Moment
        magnitude derived from a moment tensor inversion of complete
        waveforms at regional distances (less than ~13 degrees).
        Sometimes called RMT. Mww -- Moment magnitude derived from a
        centroid moment tensor inversion of the W-phase.                   </td>
    </tr>
    <tr>
      <td>Moment (Mi or Mwp)</td>
      <td>5 - 8</td>
      <td>all</td>
      <td></td>
        Based on an estimate of moment calculated from the integral
        of the displacement of the P wave recorded on broadband
        instruments.                   </td>
    </tr>
    <tr>
      <td>Energy (Me)</td>
      <td>&gt; 3.5</td>
      <td>all</td>
      <td>
        Based on the seismic energy radiated by the earthquake as
        estimated by integration of  digital waveforms                   </td>
    </tr>
  </tbody>
</table>
