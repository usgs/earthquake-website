<?php
include '../_catalog.inc.php';
?>


<h2 id="description">Description</h2>

<p>This catalog of earthquake source parameters was derived by the USGS National
Earthquake Information Center (NEIC) as part of a relocation study of the Mw 5.8
Mineral, Virginia earthquake of August 23, 2011 and its aftershocks using a
calibrated multiple event relocation method (McNamara et al., 2014). The purpose
of this relocation analysis is to produce a set of reference hypocenters
(with associated phase arrival times and empirical reading errors) for this source
region that are especially well constrained, subject to minimal bias from unknown
velocity structure and having realistic estimates of uncertainty based on the
measured statistical properties of the data set.</p>

<h2 id="method">Method</h2>
Refined estimates of the epicenters, focal depths and origin times of earthquakes
in the Mineral sequence were estimated using a method based on the Hypocentroidal
Decomposition (HD) algorithm introduced by Jordan and Sverdrup (1981), but
extensively developed for application in calibrated relocation studies,
i.e., relocation studies that are specialized to provide minimally biased estimates
of hypocentral parameters and realistic estimates of their uncertainties. The program
MLOC implements this method, which is described here.

<h2 id="data">Data</h2>
The data set of seismic phase arrival times used in this analysis includes picks from
temporary seismograph stations that were installed by several research groups around the
epicentral area; these picks were made by NEIC staff. Phase arrival times from permanent
seismic stations from the ComCat (http://earthquake.usgs.gov/earthquakes/map/) and the
bulletin of the International Seismological Centre (ISC) were also used. Arrival time
picks from the ISC were not reviewed, but all arrival time data was subject to evaluation
for outlier readings using empirically-derived estimates of reading error, as described
in the relocation methodology, above.

<h2 id="velocity-model">Velocity Model</h2>

<p>The global 1-D travel time model ak135 (Kennett et al., 1995) fits the Mineral data well
at local and near-regional distances, but the predicted travel times of direct crustal phases
(Pg, Sg) in the distance range 40-60 km are a little late. Travel times for teleseismic
phases were calculated with ak135 but for local and regional phases we calculated theoretical
travel times with a model very similar to ak135 but with slightly higher velocities in the
crust.</p>

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
      <td>0-20</td>
      <td>5.95</td>
      <td>3.60</td>
    </tr>
    <tr>
      <td>20-37</td>
      <td>6.45</td>
      <td>3.85</td>
    </tr>
    <tr>
      <td>>37</td>
      <td>8.10</td>
      <td>4.5</td>
    </tr>
  </tbody>
</table>

<p>The HD algorithm used for the relocation analysis is limited in the number
of events that can be relocated simultaneously by rapidly increasing computational time. 
The practical limit is ~200 events, about half the number of events in the Mineral
sequence that were recorded well enough to be relocated with high accuracy. We therefore divided the sequence chronologically into three subclusters, which were relocated independently.
Calibration of the Mineral subclusters was accomplished through the method of direct
calibration, in which the hypocentroid, which establishes the location of the cluster in
absolute terms, is estimated from arrival time readings at short epicentral distances to
minimize the biasing effect of unknown velocity structure. For the Mineral subclusters the
distance limit for data used to estimate the hypocentroid was 0.6°. Basic parameters for the
three subclusters, including the number of P and S readings used to estimate the four
hypocentral parameters of the hypocentroid are given in the table.</p>

<table>
  <thead>
    <tr>
    	<th> </th>
      <th># Events</th>
      <th>Mag Range</th>
      <th>Dates (2013)</th>
      <th># Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>minerala</td>
      <td>135</td>
      <td>5.8-0.1</td>
      <td>2013/8/23 - 2013/9/5</td>
      <td>2610</td>
    </tr>
    <tr>
      <td>mineralb</td>
      <td>148</td>
      <td>3.0-0.2</td>
      <td>2013/9/5 - 2013/10/31</td>
      <td>3357</td>
    </tr>
    <tr>
      <td>mineralc</td>
      <td>114</td>
      <td>3.8-1.8</td>
      <td>2013/11/2 - 2012/5/2</td>
      <td>2085</td>
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
