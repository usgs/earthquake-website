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
sequence that were recorded well enough to be relocated with high accuracy. We therefore 
divided the sequence chronologically into three subclusters, which were relocated independently.
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


<h2 id="calibrated-relocation-of-the-mineral-cluster">Calibrated Relocation of the Mineral Cluster</h2>

<p>The HD algorithm used for the relocation analysis is limited in the number of
events that can be relocated simultaneously by rapidly increasing computational
time. The practical limit is ~200 events, about half the number of events in the
Mineral sequence that were recorded well enough to be relocated with high accuracy.
We therefore divided the sequence chronologically into three subclusters, which 
were relocated independently. Calibration of the Mineral subclusters was accomplished
through the method of direct calibration, in which the hypocentroid, which establishes
the location of the cluster in absolute terms, is estimated from arrival time
readings at short epicentral distances to minimize the biasing effect of unknown
velocity structure. For the Mineral subclusters the distance limit for data used
to estimate the hypocentroid was 0.6°. Basic parameters for the three subclusters,
including the number of P and S readings used to estimate the four hypocentral
parameters of the hypocentroid are given in the table.</p>

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

<p>Estimates of relative locations (cluster vectors) in each subcluster were determined
from arrival time data of stations at less than 10° epicentral distance. Only a few
events in the cluster have significant amounts of data at greater distance, and we found
that using those data introduced bias in the location of the mainshock epicenter, shifting
it 1-2 km to the west, away from the aftershock pattern. The number of readings used to
estimate the cluster vectors in each subcluster is slightly larger than the number of data
used to estimate the hypocentroid.</p>

<p>The hypocentroid of each subcluster was estimated with readings out to an epicentral 
distance of 0.6°, to minimize the biasing effect of unmodeled
crustal velocity variations. The calibration level of the hypocentroids of the subclusters
is 0.1-0.2 km. The full uncertainty for hypocentral parameters for any given event is
obtained by adding the uncertainty of the cluster vector for that event to the uncertainty
of the appropriate hypocentroid. The full epicentral uncertainty, characterized by the longer
semi-axis of the 90% confidence ellipse, is less than 1.5 km for 393 events out of 397 that
were relocated.</p>

<p>Focal depths for all events were estimated during early runs with free depth
solutions then held fixed in later relocations. Depths range from 0-11 km with a major peak
between 5-7 km and a lesser one around 3 km, and with uncertainties of 0.3 to 3.8 km
(median uncertainty 0.6 km).</p>

<p>Because the focal depths and origin times of the Mineral
subclusters are considered to be calibrated in addition to the epicenters, the calibration
class is “CH” and 393 events are classified as CH01 or better</p>

<h2 id="empirical-reading-error">Empirical Reading Error</h2>

<p>The concept of "reading error" in earthquake location is normally understood as
an estimate of the uncertainty of the reading of the arrival time ("pick") of a
specific seismic phase on the seismogram of a specific earthquake. Seismic analysts
rarely provide their own estimate of that uncertainty beyond a qualitative
characterization as "emergent" or "impulsive", and earthquake location codes that
employ a quantitative estimate of reading error, e.g., for inverse weighting,
normally use an ad hoc value based on phase type. It is very important to realize
that estimates of hypocenter uncertainty in any earthquake location algorithm
depend on the accuracy of the uncertainties assumed for the data, as well as the
proper treatment of other sources of uncertainty in the estimation process. This is
a significant weakness of most earthquake location analyses.</p>

<p>“Empirical reading error” is a related concept, based on multiple event relocation,
i.e., location analysis of a clustered group of earthquakes. The specific
implementation discussed here is the one developed for use in the program mloc that
is based on the Hypocentroidal Decomposition (HD) algorithm of Jordan and
Sverdrup (1981). Seismic stations often observe the same seismic phase for multiple
events in such a cluster. The resulting multiple observations of the same
"station-phase" provide an opportunity to carry out a statistical analysis which
leads to an estimate of the uncertainty of those readings that is based on the
readings themselves, thus "empirical". It would be more correct to refer to this
as an "empirical reading uncertainty" or even “empirical reading consistency”, but
we follow the traditional seismological terminology. It is also important to note
that this concept of empirical reading error includes contributions to the scatter
of readings beyond reading error per se, i.e., i.e., the ability of the analyst
to specify the “correct” time of onset time of a seismic phase arrival. For example
it also absorbs differences in travel time to a station through a heterogeneous
Earth from events that are not exactly co-located, as well as scatter arising from
the different philosophies of arrival time picking used by different analysts,
differences caused by picking from different channels or instrument responses,
changes in station equipment, minor changes in instrument location, irregularities
in timing systems, differences in the precision to which picks are reported, etc..</p>

<p>Empirical reading errors are estimated as the spread of the distribution of
travel time residuals for a given station-phase (for example, the Pn phase
at station TUC) for a specific cluster of earthquakes whose differences in
location are typically, but not necessarily, small compared to the separation
of the cluster and the station. The number of samples can range from two to
several hundred. The analysis is done on the set of residuals obtained by
subtracting a theoretical arrival time, based on some travel time model and
the current hypocenter of the event, from each arrival time observation. Thus
each arrival time reading of a given station-phase is assigned the same
empirical reading error. Although this obviously falls short of the ideal
of having a reliable estimate of the uncertainty of each reading, it is a
significant improvement over the traditional methods for handling uncertainties
in arrival time data. Because the arrival time readings are weighted inversely
to their empirical reading errors in the location algorithm, the specification
of reading errors has a major impact on the estimated hypocenters and
their uncertainties.</p>

<p>The estimate of spread of the residuals must be done with a robust estimator,
i.e., one that is not sensitive to outliers, which are very common in arrival
time data sets. The familiar statistic standard deviation is a very non-robust
measure of spread. We employ the estimator Sn proposed by Croux and
Rousseeuw (1992). Note that this has nothing to do with the seismic phase
Sn. This measure of scale or spread has three desirable properties, 1) it requires
no assumptions about the nature of the underlying distribution, 2) it requires no
estimate of the central tendency (e.g., the mean or median) of the distribution,
and 3) it reduces to the standard deviation if applied to a Gaussian 
distribution.</p>

<p>An important aspect of the relocation process consists of multiple cycles in
which the current estimates of empirical reading error are used to identify
outlier readings, which are then flagged so that they will not be used in
subsequent relocations. In the following relocation, the new estimates of empirical
reading errors will tend to be smaller because of the filtering of outliers
and improvement in the locations of the clustered events. Therefore the process
of identifying outliers is iterative and it must be repeated until convergence.
In this context, "convergence" means that the distribution of residuals for a given
station-phase is consistent with the current estimate of spread. As outlier
readings are flagged, the distribution is expected to evolve toward a normal
distribution with standard deviation σ equal to the empirical reading error.
We generally continue this "cleaning" process until all readings used in the
relocation are within 3σ of the mean for that station-phase, where σ is the
current estimate of empirical reading error for the relevant station-phase.
The procedures used to construct confidence ellipses and other estimates of
hypocentral parameter uncertainty in mloc (and most other location algorithms)
are based on the assumption that the residuals have a normal distribution. In the
presence of outlier readings, the resulting uncertainty estimates will be
biased.</p>

<p>Because of inverse weighting in the HD algorithm, it is necessary to impose
minimum allowed values for empirical reading errors to prevent unrealistically
small estimates from arising when the sample size is small and values are very
near one another, or identical. We normally use 0.15 s as a minimum which
is generally appropriate for the data sets obtained from standard earthquake
catalogs, but smaller values can be permitted in special circumstances. For
singlet station-phase arrival time data (only one observation) default values
that are typical of many earthquake location algorithms (e.g., 0.5 s for
teleseismic P) are applied. Singlet readings make no contribution to the estimate
of relative locations in the HD algorithm, but they can be used to estimate
the hypocentroid, in which case the reasonableness of the default value of
empirical reading error must be evaluated for the particular data set in
order to have confidence in the derived hypocentral parameter uncertainties.</p>

<p>In summary, the use of empirical reading errors in mloc allows us to treat
the derived hypocentral uncertainties with considerable confidence. Althoug
any multiple event relocation method could implement a similar analysis, we
are not aware of any that do. Single event location methods are inherently
handicapped by the lack of any way to investigate data uncertainty in a
statistically robust way, although careful attention to the arrival time
picking process can partially compensate. Failure to adequately characterize
data uncertainties in the hypocenter estimation process leads to bias in the
derived parameters and their uncertainties.</p>



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
