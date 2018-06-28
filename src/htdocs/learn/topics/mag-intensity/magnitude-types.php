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
      <th>Magnitude Type</th>
      <th>Magnitude Range</th>
      <th>Distance Range</th>
      <th>Equation</th>
      <th>Comments</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td><strong>Mww</strong> <br />
        (Moment W-phase)(generic notation Mw)</td>
      <td>~5.0 and larger</td>
      <td>1 - 90 <br />degrees</td>
      <td>
        <p style="text-indent: 1em; text-align: justify">
          M<sub>W</sub> = 2/3 * (log<sub>10</sub>(M<sub>O</sub>) - 16.1),
        </p>
        <p>
          where M<sub>O</sub> is the seismic moment. <br />
          Note this is also unit-dependent; the formula above is for moment in dyne-cm. If using metric units (N.m), the constant is 9.1.
        </p>
      </td>
      <td>
        Derived from a centroid moment tensor inversion of the W-phase (~50-2000 s; pass band based on size of EQ). Computed for all M5.0 or larger earthquakes worldwide, but generally robust for all M5.5 worldwide. Provides consistent results to M~4.5 within a regional network of high-quality broadband stations. Authoritative USGS magnitude if computed.
      </td>
    </tr>

    <tr>
      <td><strong>Mwc</strong> <br />
        (centroid)</td>
      <td>~5.5 and larger</td>
      <td>20 - 180 <br />degrees</td>
      <td>
        <p style="text-indent: 1em; text-align: justify">
          M<sub>W</sub> = 2/3 * (log<sub>10</sub>(M<sub>O</sub>) - 16.1),
        </p>
        <p>
          where M<sub>O</sub> is the seismic moment.
        </p>
      </td>
      <td>
        Derived from a centroid moment tensor inversion of the long-period surface waves (~100-2000 s; pass band based on size of EQ). Generally computable for all M6.0 worldwide using primarily the Global Seismograph Network. Only authoritative if Mww is not computed, not published otherwise.
      </td>
    </tr>

    <tr>
      <td><strong>Mwb</strong> <br />
        (body wave)</td>
      <td>~5.5 to ~7.0</td>
      <td>30 - 90 <br />degrees</td>
      <td>
        <p style="text-indent: 1em; text-align: justify">
          M<sub>W</sub> = 2/3 * (log<sub>10</sub>(M<sub>O</sub>) - 16.1),
        </p>
        <p>
          where M<sub>O</sub> is the seismic moment.
        </p>
      </td>
      <td>
        Derived from moment tensor inversion of long-period (~20-200 s; pass band based on size of EQ) body-waves (P- and SH). Generally computable for all M5.5 or larger events worldwide. Source complexity at larger magnitudes (~M7.5 or greater) generally limits applicability. Only authoritative if Mww and Mwc are not computed.
      </td>
    </tr>

    <tr>
      <td><strong>Mwr</strong> <br />
        (regional)</td>
      <td>~4.0 to ~6.5</td>
      <td>0 - 10 <br />degrees</td>
      <td>
        <p style="text-indent: 1em; text-align: justify">
          M<sub>W</sub> = 2/3 * (log<sub>10</sub>(M<sub>O</sub>) - 16.1),
        </p>
        <p>
          where M<sub>O</sub> is the seismic moment.
        </p>
      </td>
      <td>
        Based on the scalar seismic-moment of the earthquake, derived from moment tensor inversion of the whole seismogram at regional distances (~10-100 s; pass band based on size of EQ). Source complexity and dimensions at larger magnitudes (~M7.0 or greater) generally limits applicability. Authoritative for &lt;M5.0. Within the continental US and south-central Alaska where we have a large number of high quality broadband stations we expect we can compute an Mwr consistently for events as small as M4.0. In some areas of the country, with relatively dense broadband coverage, we can compute Mwr consistently to as small as M3.5.
      </td>
    </tr>

    <tr>
      <td><strong>Ms20 or Ms</strong> <br />
        (20sec surface wave)</td>
      <td>~5.0 to ~8.5</td>
      <td>20 - 160 <br />degrees</td>
      <td>
        <p  style="text-indent: 1em; text-align: justify">
          M<sub>S</sub> = log<sub>10</sub> (<i>A/T</i>) + 1.66 log<sub>10</sub> (D) + 3.30 .
        </p>
      </td>
      <td>
        A magnitude based on the amplitude of Rayleigh surface waves measured at a period near 20 sec. Waveforms are shaped to the WWSSN LP response. Reported by NEIC, but rarely used as authoritative, since at these magnitudes there is almost always an Mw available. Ms is primarily valuable for large (>6), shallow events, providing secondary confirmation on their size. Ms_20 tends to saturate at about M8.3 or larger.
      </td>
    </tr>

    <tr>
      <td><strong>mb</strong> <br />
        (short-period body wave)</td>
      <td>~4.0 to ~6.5</td>
      <td>15 - 100 degrees </td>
      <td>
        <p  style="text-indent: 1em; text-align: justify">
          m<sub>b</sub> = log<sub>10</sub>(<i>A/T</i>) + Q(<i>D</i>,<i>h</i>) ,
        </p>
        <p>
          where <i>A</i> is the amplitude of ground motion (in microns);
          <i>T</i> is the corresponding period (in seconds);
          and Q(<i>D</i>,<i>h</i>) is a correction factor that is a function of
          distance, <i>D</i> (degrees), between epicenter and station
          and focal depth, <i>h</i> (in kilometers), of the earthquake.
        </p>
      </td>
      <td>
        Based on the amplitude of 1st arriving P-waves at periods of about 1 s. Waveforms are shaped to the WWSSN SP response. Reported for most M4.0-4.5 to 6.5 EQs that are observed teleseismically. Only authoritative for global seismicity for which there is no Mww, Mwc, Mwb or Mwr, typically 4.0-5.5 range. Mb tends to saturate at about M 6.5 or larger.
      </td>
    </tr>

    <tr>
      <td><strong>ML Ml, or ml</strong> <br />
      (local)</td>
      <td>~2.0 to ~6.5</td>
      <td>0 - 600 km</td>
      <td></td>
      <td>
        The original magnitude relationship defined by Richter and Gutenberg in 1935 for local earthquakes. It is based on the maximum amplitude of a seismogram recorded on a Wood-Anderson torsion seismograph. Although these instruments are no longer widely in use, ML values are calculated using modern instrumentation with appropriate adjustments. Reported by NEIC for all earthquakes in the US and Canada. Only authoritative for smaller events, typically M&lt;4.0 for which there is no mb or moment magnitude. In the central and eastern United States, NEIC also computes ML, but restricts the distance range to 0-150 km. In that area it is only authoritative if there is no mb_Lg as well as no mb or moment magnitude.
      </td>
    </tr>

    <tr>
      <td><strong>mb_Lg, mb_lg, or MLg</strong> <br />
        (hort-period surface wave)</td>
      <td>~3.5 to ~7.0</td>
      <td>150 – 1110 km (10 degres)</td>
      <td>
      </td>
      <td>
        A magnitude for regional earthquakes based on the amplitude of the Lg surface waves as recorded on short-period instruments. Only authoritative for smaller events in the central and eastern United States, typically &lt;4.0 for which there is no mb or moment magnitude.
      </td>
    </tr>

    <tr>
      <td><strong>Md or md</strong> <br />
      (duration)</td>
      <td>~4 or smaller</td>
      <td>0 - 400 km</td>
      <td></td>
      <td>
        Based on the duration of shaking as measured by the time decay of the amplitude of the seismogram. Sometimes the only magnitude available for very small events, but often used (especially in the past) to compute magnitude from seismograms with "clipped" waveforms due to limited dynamic recording range of analog instrumentation, which makes it impossible to measure peak amplitudes. Computed by NEIC but only published when there is no other magnitude available.
      </td>
    </tr>

    <tr>
      <td><strong>Mi or Mwp</strong> <br />
      (integrated p-wave)</td>
      <td>~5.0 to ~8.0</td>
      <td>all</td>
      <td></td>
      <td>
        Based on an estimate of moment calculated from the integral
        of the displacement of the P wave recorded on broadband
        instruments.
      </td>
    </tr>

    <tr>
      <td><strong>Me</strong> <br />
      (energy)</td>
      <td>~3.5 and larger</td>
      <td>all</td>
      <td>
        <p style="text-indent: 1em; text-align: justify">
          M<sub>e</sub> = 2/3 log<sub>10</sub>E - 2.9,
        </p>
        <p>
          where E is the energy calculated by
        </p>
        <p style="text-indent: 1em; text-align: justify">
          log<sub>10</sub><i>E</i> = 11.8 + 1.5M<sub>S</sub>
        </p>
        <p>
          where energy, <i>E</i>, is expressed in ergs.
      </td>
      <td>
        Based on the seismic energy radiated by the earthquake as
        estimated by integration of  digital waveforms.
      </td>
    </tr>

    <tr>
      <td><strong>Finite Fault</strong> <br />
      Modeling</td>
      <td>~7.0 and larger</td>
      <td>30 - 90 degrees</td>
      <td></td>
      <td>
        FFM modeling provides a kinematic description of faulting including estimates of maximum slip, area of rupture and moment release as a function of time. Results are used to provide constraints on fault dimensions and slip used in damage assessment modeling (ShakeMap, PAGER) and to model stress changes (Coulomb stress modeling) on the active fault and/or adjacent faults.
      </td>
    </tr>

  </tbody>
</table>
