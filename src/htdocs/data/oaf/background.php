<?php
// Author: Lisa Wald
// Contact: Jeanne Hardebeck
  if (!isset($TEMPLATE)) {
    $TITLE = 'Operational Aftershock Forecast Scientific Background';
    $NAVIGATION = true;
    $HEAD = '<meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <title>MathJax example</title>
            <script type="text/javascript" async
            src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async>
            </script>';
    include 'template.inc.php';
  }
?>

<p>
  Most large earthquakes are followed by additional earthquakes, called aftershocks, which make up an aftershock sequence. While most aftershocks are smaller than the mainshock, they can still be damaging or deadly. A small fraction of earthquakes are followed by a larger earthquake, in which case the first earthquake is referred to as a foreshock. For example, the 2011 M9.1 Japan earthquake and tsunami was preceded by a M7.3 foreshock two days before. When the M7.3 earthquake first occurred, it was called the mainshock, and then when the M9.1 earthquake occurred, that larger earthquake became the mainshock.
</p>
<p>
  Following a significant earthquake, this aftershock forecast can provide situational awareness of the expected number of aftershocks, as well as the probability of subsequent larger earthquakes. Specifically, we forecast:
</p>
<ol>
  <li>the expected number of smaller aftershocks that may be felt (M3+),</li>
  <li>the probability of aftershocks large enough to potentially do damage (M5+), and</li>
  <li>the probability of future moderate (M6+) to large (M7+) earthquakes.
We use the behavior of past aftershock sequences to forecast the likelihood of future aftershocks.  As an aftershock sequence progresses, our forecast also incorporates information about the behavior of that specific sequence.</li>
</ol>

<h2>Aftershock Forecast Overview</h2>

<h3>When We Make and Update Forecasts</h3>
<p>
  <strong>Forecasts are computed for earthquakes of 5+ in the United States and U.S. territories.</strong> There are higher thresholds of M6 or 6.5 in some remote and poorly-instrumented areas. We also compute forecasts for some smaller earthquakes that are of particular public interest, for example earthquakes in densely-populated areas. We will not usually compute aftershock forecasts for earthquakes that are themselves aftershocks of a prior larger earthquake, or for earthquakes that occur as part of volcanic activity.
</p>
<p>
  <strong>Forecasts are updated regularly.</strong> The rate of aftershocks changes with time, generally decreasing, although sometimes temporarily increasing after a significant aftershock. Therefore, the forecasts are updated to keep current with the changing aftershock rate. We also update the forecasts over time to incorporate more information about the specific behavior of the aftershock sequence. We update at least once within the first day, again within the first week, and again within the first month. The time that the current forecast was released, and the planned time of the next forecast update, are included with the most recent aftershock forecast information.
</p>

<h3>How to Find the Forecasts</h3>
<p>
  People can find the Aftershock Forecast for a specific earthquake by starting at the Overview (default) webpage for that earthquake and selecting the “card” titled “Aftershock Forecast.”  This card will only appear if an aftershock forecast was computed for that event. Clicking on the card will take the user to the Aftershock Forecast.
</p>

<figure>
  <img src="fig1" alt=""/>
   <figcaption>
     Screenshot of the Overview webpage for an earthquake in Alaska. The &ldquo;Aftershock Forecast&CloseCurlyDoubleQuote; card is at lower center.
   </figcaption>
</figure>

<h3>Commentary Tab: A Starting Point for Basic Information</h3>
<p>
  The Commentary tab describes the aftershock forecast in simple language, starting with the concept that larger earthquakes could follow and that aftershocks will be continuing for some time; and some safety information is included. The subsequent information is a simple summary of the forecast, followed by what has already happened, and ending with a more quantitative version of the forecast.
</p>

<figure>
  <img src="fig2" alt=""/>
   <figcaption>
     Screenshot of the Aftershock Forecast for an earthquake in Alaska, with the &ldquo;Commentary&CloseCurlyDoubleQuote; tab selected.
   </figcaption>
</figure>

<h3>Forecast Tab: Tables Showing the Detailed Forecast</h3>
<p>
  The Forecast tab presents the forecast as tables, covering a range of aftershock magnitudes and time frames. The first table shows the probability of at least one aftershock above a certain magnitude and within a certain time frame. The second table shows the likely number of aftershocks above a certain magnitude and within a certain time frame, given as range of numbers which represents the uncertainty of the forecast. If it is unlikely that there will be any aftershocks of that magnitude during that time frame, the table shows an asterisk, which means that an earthquake is possible but with a low probability.
</p>

<figure>
  <img src="fig3" alt=""/>
   <figcaption>
     Screenshot of the Aftershock Forecast for an earthquake in Alaska, with the &ldquo;Forecast&CloseCurlyDoubleQuote; tab selected.
   </figcaption>
</figure>

<h3>Model Tab: Scientific Details</h3>
<p>
  This tab shows what model was used to compute the forecast, as well as the model parameter values.  Forecasts are currently made only with the Reasenberg-Jones (1989, 1994) model.  There are three different types of parameter values:
</p>
<ol>
  &lt;li&gt;&ldquo;generic&CloseCurlyDoubleQuote; parameter values derived from previous sequences in similar tectonic settings,&lt;/li&gt;
  &lt;li&gt;&ldquo;sequence-specific&CloseCurlyDoubleQuote; parameter values fit to the aftershock sequence as of the time of the forecast, and&lt;/li&gt;
  &lt;li&gt;&ldquo;Bayesian&CloseCurlyDoubleQuote; parameter values, which combine the generic parameter values with sequence-specific information.</li>
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
  <img src="fig4" alt=""/>
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

<h3>Scientific Details</h3>
<p>
  We use the statistical model of aftershock rate developed by Reasenberg and Jones (1989, 1994).  In this model, the rate <i>R</i> of aftershocks of at least magnitude <i>M</i>, at time <i>T</i> after a magnitude Mmain mainshock, is:
</p>
<p>
  Equation 1: $$\text{R} = 10^{\text{a} = \text{b} (\text{Mmain} - \text{M})) (\text{T} = \text{c}) ^ (-\text{p})$$
</p>
<p>
  where <i>a, b, c,</i> and <i>p</i> are model parameters.  The parameter <i>a</i> represents the regional aftershock productivity, <i>b</i> represents the scaling of aftershock rate with mainshock magnitude, <i>p</i> represents the decay of the rate of aftershocks with time, and <i>c</i> is the time scale of the earliest part of the sequence before it starts to decay.  Reasenberg and Jones (1989) found values of these parameters for California aftershock sequences, and Hardebeck et al. (2018) updated these parameters with more modern data and finer regionalization.
</p>
<p>
  Page et al. (2016) extended the Reasenberg and Jones (1989) method to apply globally by grouping tectonically similar areas together, using the tectonic regionalization of García et al. (2012), and determining parameter values for each global tectonic regime.  Page et al. (2016) also found the productivity parameter <i>a</i> for each mainshock in each tectonic regime, and described the collection of <i>a</i>-values with a normal distribution.   This distribution is used to generate forecasts with uncertainty bounds that reflect the parameter uncertainty, as well as random variability.  Page et al. (2016) further improved upon the Reasenberg and Jones (1989) method by better accounting for smaller aftershocks that may be missing from the catalog in the early part of the aftershock sequence when there are too many earthquakes occurring to locate all of them.
</p>

<figure>
  <img src="fig5" alt=""/>
   <figcaption>
     Top: The global tectonic regions modified from García et al. (2012), with each region shown in a different color.  Bottom: The productivity parameter (a-value) and temporal decay parameter (p-value) for each global tectonic regime shown as a “+” with uncertainty shown by the line of matching color.  Figures from Page et al. (2016).
   </figcaption>
</figure>

<p>
  The Reasenberg and Jones (1989) model assumes all aftershocks are triggered by the mainshock, which is not always an accurate assumption.  It works well for mainshocks followed only by smaller aftershocks, but may perform poorly for sequences with large aftershocks that trigger many of their own aftershocks.  It also may perform poorly for swarms of multiple similar-sized earthquakes, which may be driven by fluid-flow or slow slip.  Future versions of this product will address these limitations of the Reasenberg and Jones (1989) model.
</p>

<h3>Generic Model Parameters</h3>
<p>
  Generic forecasts are computed using the “generic” model parameters for the earthquake’s tectonic regime.  For most events, the generic parameter values are those from Page et al. (2016).  For events in California, the generic parameter values are from Hardebeck et al. (2018).
</p>
<p>
  The generic model parameters include substantial uncertainty, due to the variability in behavior of previously observed aftershock sequences, so the generic aftershock forecasts also tend to have large uncertainty.  The parameter uncertainty is expressed in Page et al. (2016) and Hardebeck et al. (2018) as uncertainty in the productivity parameter <i>a</i>, and quantified as a normal probability distribution function for the <i>a</i>-value, denoted P<sub>generic(<i>a</i>)</sub>.
</p>
<p>
  The forecast for a given magnitude range and time period is computed by constructing a probability distribution for the number <i>N</i> of aftershocks, P(<i>N</i>).  We discretize the <i>a</i>-value probability distribution, P<sub>generic</sub>(<i>a</i>), and for each <i>a</i>-value, <i>a</i><sub>i</sub>, we compute the corresponding number of aftershocks, <i>N</i><sub>i</sub>.  We find <i>N</i><sub>i</sub> by putting
  <i>a</i><sub>i</sub> and the fixed values of <i>b, p</i>, and <i>c</i> into Equation 1 and integrating over the given time period.  We next account for random variability by generating a Poisson distribution with a mean of <i>N</i><sub>i</sub>, P<sub>i</sub>(<i>N</i>), which is the probability distribution for the number of aftershocks assuming an <i>a</i>-value of <i>a</i><sub>i</sub>.  We then sum these distributions, weighted by the probability of the corresponding <i>a</i>-value:
</p>
<p>
  Equation 2: $$\text{P}(\text{N}) = \sum_i[\text{P}_i(\text{N}) *  \text{P}_\text{generic}(\text{a}_i)]$$
</p>
<p>
  We then use the probability distribution for the number of aftershocks, P(<i>N</i>), to compute the forecast.  The probability of at least one aftershock in the given magnitude range and time period is the complement of the probability of zero aftershocks, so prob(<i>N</i>&ge;1)=1-P(0). The likely number of aftershocks is given as the 95% confidence range, <i>N</i><sub>min</sub> to <i>N</i><sub>max</sub>, where prob(<i>N</i>&le;<i>N</i><sub>min</sub>)&ap;0.025 and
  prob(<i>N</i>&le;<i>N</i><sub>max</sub>)&ap;0.975 (the equalities are approximate due to the inherent discreteness of the P(<i>N</i>) distribution).
</p>

<h3>Sequence-Specific Model Parameters</h3>
<p>
  The sequence-specific model parameters are computed from the aftershocks that have been observed up to the time of the forecast.  Usually, we retain the generic values of <i>b, p</i>, and <i>c</i>, and determine a sequence-specific value for just for the productivity <i>a</i>-value.  It has been shown that fitting more than one parameter for a single sequence can be unstable (Llenos and Michael, 2017).  For sequences with an unusually high or low rate of decay with time, we may also fit a sequence-specific <i>p</i>-value.
</p>
<p>
  We determine the <i>a</i>-value (and possibly the <i>p</i>-value) by finding the value that maximizes the likelihood, <i>L</i>, of observing the actual aftershocks given the model and parameter values.  We use the likelihood equation given by Ogata (1983).  We find the likelihood for the discretized values of <i>a</i>, L(<i>a</i>).  The likelihood scales with the probability that the parameter values are correct, so we can use the likelihood to define the sequence-specific probability distribution function for the a-value,
  $$\text{P}_{seq-spec}(\text{a}) = \frac{L(\text{a})}{(\sum_i\text{L}(\text{a}i))}$$.
  The probability distribution for the number of aftershocks, P(<i>N</i>), and the forecast can then be computed using the same procedures as for the generic model, using P<sub>seq-spec</sub>(<i>a</i>) instead of P<sub>generic</sub>(<i>a</i>).
</p>
<p>
  Using the sequence-specific parameters usually reduces the uncertainty of the forecast, compared to the generic parameters, because it ignores the observed variability of prior sequences.  Because it neglects this variability, it is possible that the sequence-specific parameters may reduce the uncertainty too much.  This problem is addressed by the Bayesian model parameters, which are generally preferred over the sequence-specific parameters.
</p>

<h3>Bayesian Model Parameters</h3>
<p>
  The Bayesian model updates the generic parameters using the observed aftershock sequence up to the time of the forecast.  The generic probability distribution function for the <i>a</i>-value, P<sub>generic</sub>(<i>a</i>), is used as the Bayesian <i>prior</i>.  Following Bayes’ theorem, the prior is multiplied by the likelihood of observing the data given the parameter values to compute the <i>posterior</i> distribution, in this case P<sub>Bayes</sub>(<i>a</i>) = P<sub>generic</sub>(<i>a</i>)* L(<i>a</i>), normalized such that the total probability is 1.  The probability distribution for the number of aftershocks, P(<i>N</i>), and the forecast are computed using the same procedure as for the generic model, using P<sub>Bayes</sub>(<i>a</i>) instead of P<sub>generic</sub>(<i>a</i>).  The Bayesian model only differs from the generic model when the observations force it to.  Therefore, the Bayesian model resembles the generic model early in the sequence, and transitions to resembling the sequence-specific model later in the sequence.
</p>

<figure>
  <img src="fig6" alt=""/>
   <figcaption>
     An example of Bayesian updating of productivity parameter (a-value) for the 2010 Mw 8.8 Maule, Chile, earthquake.  Immediately following the earthquake, the SZ-GENERIC region-specific a-value distribution can be used.  As the aftershock sequence progresses and additional data are collected, this distribution can be treated as a prior distribution and updated using Bayes’ rule. Posterior distributions at subsequent time intervals are shown.  Figure from Page et al. (2016).
   </figcaption>
</figure>

<h2>References</h2>
<ul class="referencelist">
  <li>
    García, D., D. J. Wald, and M. G. Hearne (2012). A global earthquake discrimination scheme to optimize ground-motion prediction equation selection, Bulletin of the Seismological Society of America, vol. 102, pp. 185–203.
  </li>
  <li>
    Hardebeck J.L, A.L. Llenos, A.J. Michael, M.T. Page and N. van der Elst. (2018). Updated California Aftershock Parameters, Seismological Research Letters, vol. 90, pp. 262-270.
  </li>
  <li>
    Llenos, A. L., and A. J. Michael (2017). Forecasting the (un)productivity of the 2014 M 6.0 South Napa aftershock sequence, Seismological Research Letters, vol. 88, pp. 1241-1251.
  </li>
  <li>
    Ogata, Y. (1983). Estimation of the parameters in the modified Omori formula for aftershock frequencies by the maximum likelihood procedure, Journal of Physics of the Earth, vol. 31(2), pp. 115-124.
  </li>
  <li>
    Page, M. T., N. Van Der Elst, J. Hardebeck, K. Felzer, and A. J. Michael (2016). Three ingredients for improved global aftershock forecasts: Tectonic region, time-dependent catalog incompleteness, and intersequence variability, Bulletin of the Seismological Society of America, vol. 106, pp. 2290-2301.
  </li>
  <li>
    Reasenberg, P. A., and L. M. Jones (1989). Earthquake hazard after a mainshock in California, Science, vol. 243, pp. 1173–1176.
  </li>
  <li>
    Reasenberg, P. A., and L. M. Jones (1994). Earthquake aftershocks: update, Science, vol. 265, pp. 1251-1253.
  </li>
  
