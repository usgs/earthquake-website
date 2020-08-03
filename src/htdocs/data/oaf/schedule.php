<?php
// Author: Lisa Wald
// Contact: Jeanne Hardebeck
  if (!isset($TEMPLATE)) {
    $TITLE = 'Automatic Forecast Update Schedule';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>(as of July 31, 2020)</p>

<p>
  The USGS automatic Operational Aftershock forecasts are initiated on the following schedule and are issued 10 minutes later.  Forecasts using the Generic parameters for the region are initiated 20 minutes, 50 minutes, and 2 hours after the mainshock occurs.  Thus, the first forecast is issued 30 minutes following the mainshock.
</p>
<p>
  After those times a Bayesian combination of Generic and Sequence Specific productivity parameters are used.  During the first day, those forecasts are initiated at 4 hours, 6 hours, 12 hours, and 18 hours after the mainshock occurs.  Further forecasts are initiated daily at days 1 to 14, every three days for days 16 to 28, every 7 days for days 35 to 357, and a final forecast is issued at day 365.
</p>
<p>
  Manual forecasts may be issued for additional updates, when changing forecast parameters such as the magnitude of completeness, or when switching to include sequence specific decay parameters.  In the latter case, the Sequence Specific parameters are used without a Bayesian combination.  The current model type and basic parameters are found in the Model tab of the forecast.  All parameters are shown in the download file which is in json format.
</p>
<pre>
20 minutes*
50 minutes*
2 hours*
4 hours
6 hours
12 hours
18 hours
1 day
2 days
3 days
4 days
5 days
6 days
7 days
8 days
9 days
10 days
11 days
12 days
13 days
14 days
16 days
19 days
22 days
25 days
28 days
35 days
42 days
49 days
56 days
63 days
70 days
77 days
84 days
91 days
98 days
105 days
112 days
119 days
126 days
133 days
140 days
147 days
154 days
161 days
168 days
175 days
182 days
189 days
196 days
203 days
210 days
217 days
224 days
231 days
238 days
245 days
252 days
259 days
266 days
273 days
280 days
287 days
294 days
301 days
308 days
315 days
322 days
329 days
336 days
343 days
350 days
357 days
365 days 
</pre>

