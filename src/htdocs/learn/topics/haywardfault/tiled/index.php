<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Active Traces of the Hayward Fault';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<h2>Tiled Map</h2>
				<div class="align-center" style="width: 603px">
				<h3>Click along the fault for a larger view</h3>
				<img src="/education/haywardfault/images/index_all.gif" alt="" width="593" height="756" usemap="#index_all_Map"/></a>
              <map name="index_all_Map">
                <area shape="poly" alt="" coords="471,595,321,385,274,420,453,676,504,642" href="index_S.php" />
                <area shape="poly" alt="" coords="321,383,204,220,155,253,274,418" href="index_C.php" />
                <area shape="poly" alt="" coords="81,50,57,60,35,87,154,253,204,220" href="index_N.php" />
          </map>
</div>
