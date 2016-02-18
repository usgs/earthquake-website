<?php
include '../_catalog.inc.php';
?>


<h2 id="description">Description</h2>

<p>The arrival time readings used in this analysis were made by NEIC, including picking
of non-real-time temporary seismograph stations that were installed around the
epicentral area.   Also used were permanent seismic stations at distances less than
about 1000 km. Additional readings from the USGS/NEIC ComCat and the ISC were
added.  Earthquake locations were done using Hypocentral Decomposition (Jordan
and Sverdrup, 1981).   Estimates of relative locations (cluster vectors) were
restricted to stations at less than 10°.  Only a few events in the cluster have
significant amounts of data at greater distance, and we found that using those data
introduced bias in the location of the mainshock epicenter, shifting it 1-2 km to the
west, away from the aftershock pattern.</p>

<p>The hypocentroid is estimated with readings out to 0.6°. The calibration level of the
hypocentroid is 0.2 km and 134 events qualify as CE01 or better.  Focal depths for
all events were estimated during early runs with free depth solutions then held
fixed in later relocations.  Depths range from 0-11 km with a peak between 5-8 km
and uncertainties of 0.3 to 3.8 km (median 0.6 km).</p>


<h2 id="velocity-model">Velocity Model</h2>

<p>The global 1-D travel time model ak135 fits the data well at local and near-regional
distances, but the predicted travel times in the distance range 40-60 km are a little
late. I am using a model very similar to ak135 but with slightly higher velocities in
the crust; with those velocities the Pn and Sn readings are fit by a Moho depth of 37
km. This model fits the data very well out to about 10°, but beyond that distance
Pn arrivals arrive than predicted.</p>

<table>
  <thead>
    <tr>
      <th>Depth (km)</th>
      <th>Vp (km/s)</th>
      <th>Vs (km/s)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0.000</td>
      <td>5.950</td>
      <td>3.600</td>
    </tr>
    <tr>
      <td>20.000</td>
      <td>5.950</td>
      <td>3.600</td>
    </tr>
    <tr>
      <td>20.000</td>
      <td>6.450</td>
      <td>3.850</td>
    </tr>
    <tr>
      <td>37.000</td>
      <td>6.450</td>
      <td>3.850</td>
    </tr>
    <tr>
      <td>37.000</td>
      <td>8.100</td>
      <td>4.500</td>
    </tr>
    <tr>
      <td>120.000</td>
      <td>8.100</td>
      <td>4.500</td>
    </tr>
  </tbody>
</table>


<h2 id="empirical-reading-errors">Empirical Reading Errors</h2>

<p>The concept of "reading error" in earthquake location is normally understood as an
estimate of the uncertainty of the reading of the arrival time ("pick") of a specific
seismic phase on the seismogram of a specific earthquake. Seismic analysts rarely
provide their own estimate of that uncertainty beyond a qualitative characterization
as "emergent" or "impulsive", and earthquake location codes that employ a
quantitative estimate of reading error, e.g., for inverse weighting, normally use an ad
hoc value based on phase type.</p>

<p>Empirical Reading Error is a related concept, based on multiple event relocation, i.e.,
location analysis of a clustered group of earthquakes. Many seismic stations observe
the same seismic phase for multiple events in the cluster. The resulting multiple
observations of the same "station-phase" provide an opportunity to carry out a
statistical analysis which leads to an estimate of the uncertainty of those readings
that is based on the readings themselves, thus "empirical". It would be more correct
to refer to this as an "Empirical Reading Uncertainty", but we follow the traditional
seismological terminology. It is also important to note that this concept of Empirical
Reading Error includes contributions to scatter of readings beyond reading error
per se. For example it will absorb differences in travel time through a heterogeneous
Earth even from events that are not exactly co-located, as well as scatter arising
from the different philosophies of arrival time picking used by different analysts,
changes in station equipment, irregularities in timing systems, differences in the
precision to which picks are reported, etc.</p>

<p>Empirical Reading Errors are estimated from the distribution of residuals for a
given station-phase (for example, the Pn phase at station TUC) for a specific cluster.
The number of samples can range from two to several hundred. Default values are
used for instances of a single sample of a station-phase. It is not uncommon to have
multiple independent readings of the same phase at the same station for the same
event. The analysis is done on the set of residuals obtained by removing a
theoretical arrival time for each reading, based on a standard Earth model and the
current hypocenters of the events in the cluster. Thus each arrival time reading of a
given station-phase is assigned the same empirical reading error. Although this
obviously falls short of the ideal of having a reliable estimate of the uncertainty of
each reading, it is a significant improvement over the traditional methods for
handling uncertainties in arrival time data. Because the arrival time readings are
weighted inversely to their empirical reading errors in the location algorithm, the
specification of reading errors has a major impact on the estimated hypocenters and
their uncertainties.</p>

<p>The estimate of spread of the residuals must be done with a robust estimator, i.e.,
one that is not sensitive to outliers, which are very common in arrival time data sets.
We employ the estimator "Sn" proposed by Croux, C., & Rousseeuw, P. J. (1992):
Time-efficient algorithms for two highly robust estimators of scale, Computational
Statistics, 1, 411–428. This measure of scale or spread has three desirable
properties, 1) it requires no assumptions about the nature of the underlying
distribution, 2) it requires no estimate of the central tendency (e.g., the mean or
median) of the distribution, and 3) it reduces to the standard deviation if applied to
a Gaussian distribution.</p>

<p>An important aspect of the relocation process consists of multiple cycles in which
the current estimates of empirical reading error are used to identify outlier
readings, which are then flagged so that they will not be used in subsequent
relocations. In the following relocation, estimates of empirical reading errors will
tend to be smaller because of the filtering of outliers and improvement in the
locations of the clustered events. Therefore the process of identifying outliers is
iterative and it must be repeated until convergence. In this context, "convergence"
means that the distribution of residuals for a given station-phase is consistent with
the current estimate of spread. As outlier readings are flagged, the distribution is
expected to evolve toward a normal distribution with standard deviation equal to
the empirical reading error. We generally continue this "cleaning" process until all
readings used in the relocation are within 3 sigma of the mean for that station-
phase, where sigma is the current estimate of empirical reading error for the
relevant station-phase.</p>


<h2 id="references">References</h2>

<ul class="referencelist">
<li>Jordan, T.H. and K.A. Sverdrup (1981).  Teleseismic location techniques and their
application to earthquake clusters in the South-central Pacific, Bull. Seism. Soc. Am.,
71, 1105-1130.</li>
<li>McNamara, D.E., Benz, H.M., Herrmann, R.B., Bergman, E.A., Earle, P., Meltzer, A.
Withers, M., and M. Chapman (2014). The Mw 5.8 Mineral, Virginia, earthquake of
August 2011 and aftershock sequence: Constraints on earthquake source
parameters and fault geometry, Bull. Seism. Soc. Am., 104, doi 10.1785/0120130058</li>
</ul>
