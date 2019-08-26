<?php
// Author: Lisa Wald
// Contact: Jeanne Hardebeck
  if (!isset($TEMPLATE)) {
    $TITLE = 'Aftershock Forecast Overview';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>
  Most large earthquakes are followed by additional earthquakes, called aftershocks, which make up an aftershock sequence. While most aftershocks are smaller than the mainshock, they can still be damaging or deadly. A small fraction of earthquakes are followed by a larger earthquake, in which case the first earthquake is referred to as a foreshock. For example, the 2011 M9.1 Japan earthquake and tsunami was preceded by a M7.3 foreshock two days before. When the M7.3 earthquake first occurred, it was called the mainshock, and then when the M9.1 earthquake occurred, that larger earthquake became the mainshock.
</p>
<p>
  Following a significant earthquake, this aftershock forecast can provide situational awareness of the expected number of aftershocks, as well as the probability of subsequent larger earthquakes. <strong>Specifically, we forecast:</strong>
</p>
<ol>
  <li>the expected number of smaller aftershocks that may be felt (M3+),</li>
  <li>the probability of aftershocks large enough to potentially do damage (M5+), and</li>
  <li>the probability of future moderate (M6+) to large (M7+) earthquakes.</li>
</ol>
<p>
  We forecast aftershock activity over future time intervals of a day,
a week, a month, and a year. We use the behavior of past aftershock sequences to forecast the likelihood of future aftershocks.  As an aftershock sequence progresses, our forecast also incorporates information about the behavior of that specific sequence.
</p>

<h2>When We Make and Update Forecasts</h2>
<p>
  <strong>Forecasts are posted for earthquakes of M5+ in the United States and U.S. territories.</strong> There are higher thresholds of M6 or 6.5 in some remote and poorly-instrumented areas. We also compute forecasts for some smaller earthquakes that are of particular public interest, for example earthquakes in densely-populated areas. We will not usually compute aftershock forecasts for earthquakes that are themselves aftershocks of a prior larger earthquake, or for earthquakes that occur as part of volcanic activity.
</p>
<p>
  <strong>Forecasts are updated regularly.</strong> The rate of aftershocks changes with time, generally decreasing, although sometimes temporarily increasing after a significant aftershock. Therefore, the forecasts are updated to keep current with the changing aftershock rate. We also update the forecasts over time to incorporate more information about the specific behavior of the aftershock sequence. We update at least once within the first day, again within the first week, and again within the first month. The time that the current forecast was released, and the planned time of the next forecast update, are included in each forecast.
</p>

<h2>How to Find the Forecasts</h2>
<p>
  People can find the Aftershock Forecast for a specific earthquake by starting at the Overview (default) webpage for that earthquake and selecting the “card” titled “Aftershock Forecast.”  This card will only appear if an aftershock forecast was computed for that event. Clicking on the card will take the user to the Aftershock Forecast.
</p>

<figure>
  <img src="images/fig1.jpg" alt=""/>
   <figcaption>
     Screenshot of the Overview webpage for an earthquake in Alaska. The &ldquo;Aftershock Forecast&CloseCurlyDoubleQuote; card is at lower center.
   </figcaption>
</figure>

<h2>Commentary Tab: A Starting Point for Basic Information</h2>
<p>
  The Commentary tab describes the aftershock forecast in simple language, starting with the concept that larger earthquakes could follow and that aftershocks will be continuing for some time; and some safety information is included. The subsequent information is a simple summary of the forecast, followed by what has already happened, and ending with a more quantitative version of the forecast.
</p>

<figure>
  <img src="images/fig2.gif" alt=""/>
   <figcaption>
     Screenshot of the Aftershock Forecast for an earthquake in Alaska, with the &ldquo;Commentary&CloseCurlyDoubleQuote; tab selected.
   </figcaption>
</figure>

<h2>Forecast Tab: Tables Showing the Detailed Forecast</h2>
<p>
  The Forecast tab presents the forecast as tables, covering a range of aftershock magnitudes and time frames. The first table shows the probability of at least one aftershock above a certain magnitude and within a certain time frame. The second table shows the likely number of aftershocks above a certain magnitude and within a certain time frame, given as range of numbers which represents the uncertainty of the forecast. If it is unlikely that there will be any aftershocks of that magnitude during that time frame, the table shows an asterisk, which means that an earthquake is possible but with a low probability.
</p>

<figure>
  <img src="images/fig3.gif" alt=""/>
   <figcaption>
     Screenshot of the Aftershock Forecast for an earthquake in Alaska, with the &ldquo;Forecast&CloseCurlyDoubleQuote; tab selected.
   </figcaption>
</figure>

<h2>Model Tab: Scientific Details</h2>
<p>
  This tab shows what model was used to compute the forecast, as well as the model parameter values.  Forecasts are currently made only with the Reasenberg-Jones (1989, 1994) model.  There are three different types of parameter values:
</p>
<ol>
  <li>&ldquo;generic&CloseCurlyDoubleQuote; parameter values derived from previous sequences in similar tectonic settings,</li>
  <li>&ldquo;sequence-specific&CloseCurlyDoubleQuote; parameter values fit to the aftershock sequence as of the time of the forecast, and</li>
  <li>&ldquo;Bayesian&CloseCurlyDoubleQuote; parameter values, which combine the generic parameter values with sequence-specific information.</li>
</ol>
</p>

<h2>How the Aftershock Forecasts Work</h2>
<p>
  Our forecast is based on a statistical model of the behavior of past aftershock sequences in similar tectonic settings.  The rate of aftershocks usually follows a few general rules:
</p>
<ol>
  <li>
    Larger mainshocks trigger more aftershocks than smaller mainshocks, and the aftershock productivity for a given mainshock magnitude also varies between tectonic regions.  For instance, mainshocks along the San Andreas fault in California generally produce fewer aftershocks than mainshocks of the same magnitude where the Pacific plate collides with and subducts under Alaska.
  </li>
  <li>
    The rate of aftershocks decreases with time, such that the earthquake rate is roughly inversely proportional to the time since the mainshock.  E.g., there are about 10 times as many aftershocks on the first day as on the tenth day.
  </li>
  <li>
    The magnitudes of the aftershocks do not get smaller with time, only their rate changes.
  </li>
</ol>

<figure>
  <img src="images/fig4.gif" alt=""/>
   <figcaption>
     Two example aftershock sequences, from southern California, that illustrate the three general properties of aftershocks. A circle shows each aftershock’s time of occurrence (horizontal axis) and magnitude (vertical axis). The larger-magnitude M6.7 Northridge earthquake is followed by many more aftershocks than the smaller M5.1 La Habra earthquake. The rate of aftershocks in both sequences decreases as time passes. The magnitudes of the aftershocks don’t change with time, meaning that large aftershocks are still possible later in the sequence, as happened following Northridge.
   </figcaption>
</figure>

<p>
  The initial forecast after an earthquake occurs is calculated using parameters that worked for previous earthquakes in that region or similar regions around the world.  As time goes by and we observe how many aftershocks are happening we use parameters that are a combination of the initial parameters and parameters determined from the current sequence of earthquakes.
</p>
<p>
  The initial forecast uses only the mainshock magnitude, and therefore can be released soon after the mainshock, and before many aftershocks have occurred.  Because the initial forecast depends a lot on the mainshock magnitude, we wait at least 30 minutes after the event occurs before issuing a forecast, to allow the preferred mainshock magnitude to stabilize.  We also update the forecast if the mainshock magnitude significantly changes after the initial forecast.
</p>
