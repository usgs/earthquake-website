<?php
// Author: Lisa Wald
// Contact: Jill Franks, jfranks@usgs.gov
if (!isset($TEMPLATE)) {
  $TITLE = 'External Grants';
  $NAVIGATION = true;
  // Use Earthquake level nav file
  include_once 'functions.inc.php';
  ob_start();
  include '../_navigation.inc.php';
  $NAVIGATION = ob_get_clean();

  include 'template.inc.php';
}
?>

<div class='row'>
  <div class='column one-of-two'>

    <h2>Annual Competitive Grants</h2>

<!--
    <p>
      <strong>The FY19 External Grants Application Period is now open though May 22, 2018. The <a href="https://www.grants.gov/">grants.gov</a> Opportunity Number is G18AS00021.</strong>
    </p>
    <p>
      <a href="https://www.grants.gov/web/grants/search-grants.html?keywords=G18AS00021">FY19 External Grants Program Announcement</a>
    </p>
-->
    <p>
      External Grants issues an annual Program announcement for competitive proposals for grants and cooperative agreements to support research in earthquake hazards, the physics of earthquakes, earthquake occurrence, and earthquake safety policy. To find out when the next application period will be, you can enroll on the <a href="http://grants.gov/">grants.gov</a> website to receive an email notification regarding "CFDA number 15.807 application period openings" : <a href="https://www.grants.gov/web/grants/manage-subscriptions.html">Manage Subscriptions</a>.
    </p>

    <p>
      During the Application period, applicants must submit proposals and other required documents through <a href="http://www.grants.gov/">Grants.gov</a>; paper copies will not be accepted.  Please note that the requirements and other guidance for submitting proposals, as wells as annual updates of research priorities, referred to as the Program Announcement, can only be accessed through <a href="http://www.grants.gov/">www.grants.gov</a>.
    </p>
<!--
    <p>
      The application period is generally open from early March to mid-May.
    </p>
-->

    <ul>
      <li><a href="forpis.php">Information for PIs</a></li>
      <li><a href="contact.php">Contacts</a></li>
    </ul>

    <h3>Questions?</h3>
    <p>
      Contact <a href="mailto:jfranks@usgs.gov">Jill Franks</a>, Manager for External Grants, or <a href="mailto:mccrayskinner@usgs.gov">Deb McCray Skinner</a>, Program Analyst for External Grants.
    </p>
  </div>

  <div class='column one-of-two'>
    <h2>Funded External Grants</h2>
    <ul>
      <li><a href="/cfusion/external_grants/research.cfm">Funded Research</a></li>
      <li><a href="/cfusion/external_grants/networks.cfm">Funded Network Operations</a></li>
      <li><a href="/cfusion/external_grants/monitoring_upgrades.cfm">ARRA-Funded Monitoring Upgrades</a></li>
    </ul>


    <h2>Earthquake Hazards Program Grant Proposal Success Rate</h2>

    <table title='Earthquake Hazards Program Grant Proposal Success Rate'>

      <tr>
      	<th>Year</th>
      	<th>Proposals reviewed by panels</th>
      	<th>Proposals funded</th>
      	<th>Proposals recomm. for support by Peer Panels, but insufficient funds available to support</th>
      	<th>Proposals NOT recomm. for support by panels</th>
      </tr>

      <tr>
      	<td>2017</td>
      	<td>212</td>
      	<td>62</td>
      	<td>89</td>
      	<td>61</td>
      </tr>

      <tr>
      	<td>2016</td>
      	<td>211</td>
      	<td>66</td>
      	<td>65</td>
      	<td>80</td>
      </tr>

      <tr>
      	<td>2015</td>
      	<td>203</td>
      	<td>80</td>
      	<td>38</td>
      	<td>85</td>
      </tr>

      <tr>
      	<td>2014</td>
      	<td>198</td>
      	<td>76</td>
      	<td>50</td>
      	<td>72</td>
      </tr>

      <tr>
      	<td>2013</td>
      	<td>221</td>
      	<td>59</td>
      	<td>68</td>
      	<td>94</td>
      </tr>

      <tr>
      	<td>2012</td>
      	<td>187</td>
      	<td>73</td>
      	<td>44</td>
      	<td>70</td>
      </tr>

      <tr>
      	<td>2011</td>
      	<td>208</td>
      	<td>76</td>
      	<td>47</td>
      	<td>85</td>
      </tr>

      <tr>
      	<td>2010</td>
      	<td>237</td>
      	<td>65</td>
      	<td>66</td>
      	<td>106</td>
      </tr>

      <tr>
      	<td>2009</td>
      	<td>162</td>
      	<td>80</td>
      	<td>26</td>
      	<td>56</td>
      </tr>
    </table>
  </div>
</div>

<hr/>

<h2>About External Research Grants</h2>

<p>
  The <a href="https://www.usgs.gov/">U.S. Geological Survey (USGS)</a> provides
  support for research that will assist in achieving the goals of the Earthquake
  Hazards Program. The goal is to mitigate earthquake losses that can occur in
  many parts of the nation by providing earth science data and assessments
  essential for land-use planning, engineering design, and emergency
  preparedness decisions.
</p>

<p>
  The USGS participates in earthquake science activities with the <a
  href="http://www.nsf.gov/">National Science Foundation (NSF)</a>, the<a
  href="http://www.fema.gov/"> Federal Emergency Management Agency (FEMA)</a>,
  the <a href="http://www.nehrp.gov/">National Earthquake Hazards Reduction
  Program (NEHRP)</a> and the <a href="http://www.nist.gov/"> National Institute
  of Standards and Technology (NIST)</a>, the last having the lead role to plan
  and coordinate the national effort. In addition to activities performed by
  USGS staff, expertise in earthquake studies that exist outside the Federal
  Government is applied through a substantial program of grants, cooperative
  agreements, and/or contracts with universities, state, regional and local
  government agencies, and private industry. External research is solicited in
  order to develop information, knowledge, and methods which are relevant to the
  major program elements.
</p>

<p>
  Unsolicited Proposals may be submitted out of cycle only in cases where there is a compelling circumstance or emergency that must be acted on before the next competitive grant cycle.&nbsp; Proposers should contact the appropriate Regional or Topical Coordinator prior to submitting out-of-cycle proposals. See <a href="https://www2.usgs.gov/contracts/unsolbk.html">Guidance for submitting unsolicited proposals</a>.
</p>
