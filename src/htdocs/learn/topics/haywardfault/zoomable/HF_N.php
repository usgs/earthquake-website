<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Active Traces of the Hayward Fault';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<h2>Zoomable Map - Northern Cities</h2>
<div class="align-center" style="width: 750px; margin-top: 1.5em;"">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="750" height="450" id="theMovie">
    <param name="FlashVars" value="zoomifyImagePath=/learn/topics/haywardfault/zoomable/hf_zoom_N/">
    <param name="MENU" value="FALSE">
    <param name="SRC" value="zoomifyViewer.swf">
    <embed flashvars="zoomifyImagePath=/learn/topics/haywardfault/zoomable/hf_zoom_N/" src="zoomifyViewer.swf" menu="false" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="750" height="450" name="theMovie"></embed>
  </object>
</div>
<div class="nav-buttons">
  <a href="/learn/topics/haywardfault/zoomable/HF_C.php"><img src="/learn/topics/haywardfault/images/next.gif" height="20" width="30" /></a>
</div>
<p>Requires <a href="http://www.adobe.com/products/flashplayer/">Adobe Flash Player</a> (free download)</p>
