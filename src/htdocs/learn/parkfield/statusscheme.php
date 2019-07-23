<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Repeating Earthquakes';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>

 <table>
  <tr>
    <th>Status Level</th>
    <th>Required Creep<a href="#creep">*</a> (in absence of M 3.5 or larger shocks)</th>
    <th>Required Seismicity<a href="#creep">*</a></th>
    <th>1996 Probability, in %, of shocks in next 72 hours<a href="#prob">+</a></th>
  </tr>
	<tr>
    <td>D</td>
    <td><p>At any one <a href="#creepstation">site</a> other than XSCI<sup>1</sup>,
        a nearly continuous increase in creep that exceeds 1 mm within 7 days
        and continues at a comparable or greater rate over a period greater
        than 10 days. <br>
                    <sup> 1</sup> XSCI normally moves 0.25-0.5 mm/wk. </p>
      <p>At any two adjacent <a href="#creepstation">site</a>s other
        than XSCI, nearly simultaneous onset of an almost continuous increase
        in creep that exceeds 0.5 mm in 24 hours. </p>
      <p>At one <a href="#creepstation">site</a>, an unusually large
        creep event. For creep meters northwest f XDR2 events with creep &gt;0.5
        mm in the first 30 minutes would be unusually large. For creepmeters
        southeast of XDR2 events with creep &gt;0.33 mm in the first 30 minutes
        would be unusually large.</p>
      <p>At any one <a href="#creepstation">site</a>, a series of closely
        spaced creep events, with continuous movement greater than 1.5 mm in
        3 hours. </p></td>
    <td>One <i>M</i>&gt; or = 3.2 shocks in the Small Middle
      Mt. <a href="#Seiszone">alert zone</a></p>
        <p align="left">One <i>M</i> 3.3 shocks in the Parkfield <a href="#Seiszone">alert
          zone</a></p></td>
    <td>0.68</td>
  </tr>
	<tr>
    <td>C</td>
    <td><p>Nearly simultaneously onset of creep at two or more creepmeters
        that exceeds 0.5 mm in one hour. </p>
      <p>More than 1 mm of creep on the Middle Mtn. creepmeter in one
        hour. </p></td>
    <td>One <i>M</i>&gt; or = 3.9 shocks in the Small Middle Mt. <a href="#Seiszone">alert zone</a></p>
        <p align="left">One <i>M</i> 4.2 shocks in the Parkfield <a href="#Seiszone">alert
          zone</a></p></td>
    <td>2.8</td>
  </tr>
  <tr>
    <td>B</td>
    <td><p>More than 5 mm of creep in 72 hours on the Middle Mtn. creepmeter
        with confirming signals of tectonic origin on another network.</p>
      <p>More than 5 mm of creep in 72 hours on two or more parkfield
        area creepemeters.</p></td>
    <td><p align="left">One <i>M</i>&gt; or = 4.7 shocks in the Small Middle
      Mt. <a href="#Seiszone">alert zone</a></p>
        <p align="left">One <i>M</i> 5.2 shock in the Parkfield <a href="#Seiszone">alert
          zone</a></p></td>
    <td>11</td>
  </tr>
  <tr>
    <td>A</td>
    <td>Creep rates on multiple instrument (or at Middle
      Mtn. along with confirming signals of tectonic origin on another network)
      in excess of 0.5 mm/hour for 6-10 hours or cumulative creep in excess
      of 5 mm in a shorter period.</td>
    <td>Recurrence of the immediate <i>M </i>5 foreshock
      to the 1934 and 1966 Parkfield mainshocks, as determined by special studies
      of its seismic waveforms and hypocentral location</td>
    <td>37</td>
  </tr>
</table>
<caption><p><a name="creep"></a>* The status levels get down-graded if it has been raining
  in the week prior to the candidate creep event unless signals can be confirmed
  with additional data. Either seismicity or creep can meet the spcific status
  criteria. If both creep and seismicity meet their specifed criteria for a status
  level, then the status level is increased to the next level. (ie, If both seismicity
  and creep meet status level "C", the level is increased to a status level "B".)
  There are other instruments that have athreshold for status level D. </p></caption>
<caption><p><a name="prob"></a>+ Seismicity status probabilities are based on statistical
  models of foreshock behavior. For the other networks (such as creep) probabilities
  are based on anomalies about as unusual as the stated earthquakes, but the data
  are insufficient to support a formal statistical analysis.</p></caption>
 <figure style="max-width: 545px">
          <img src="/learn/parkfield/Images/statusmap.gif" alt="Seismic status zones near Parkfield." /></a>
            <figcaption>Seismic status zones near Parkfield. The Small Middle
      Mtn. satus zone includes shocks with epicenters within the small figure
      centered on Middle Mtn. and with focal depths &#155; or = 6.5 km. The Parkfield
      area status zone extends along the San Andreas fault trace from the creeping
      section northwest of Middle Mtn. to the simplier section southeast of Cholame.
      (Updated version (A. Michael, 2001) of map from USGS, Parkfield, California,
      Earthquake Prediction Scenarios and Response Plans, OF 87-192, 1987.)</figcaption>
</figure>
 
 <figure style="max-width: 510px">
          <img src="/learn/parkfield/Images/OF87-192f5.gif" alt="Creepmeter locations relative to the rupture zone of the characteristic Parkfield earthquake in 1966."  /></a>
            <figcaption>Creepmeter locations relative to the rupture zone of the characteristic
      Parkfield earthquake in 1966.</figcaption>
</figure>
 
