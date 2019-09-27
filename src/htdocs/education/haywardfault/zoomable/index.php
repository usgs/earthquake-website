<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Active Traces of the Hayward Fault';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<h2>Zoomable Map</h2>
				<div class="align-center" style="width: 603px">
				<h3>Click along the fault for a larger view</h3>
				<img src="/education/haywardfault/images/index_all.gif" alt="" usemap="#index_all_Map"/></a>
              <map name="index_all_Map">
<area shape="poly" alt="" coords="290,462,389,618,447,574,333,425" href="HF_S.php" />
<area shape="poly" alt="" coords="330,427,169,190,125,213,291,459" href="HF_C.php" />
<area shape="poly" alt="" coords="64,41,39,46,25,72,125,212,167,190" href="HF_N.php" />
          </map>
</div>
