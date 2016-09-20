<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	9/15/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'"How Much Bigger…?" Calculator';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function calc_mag_nrg(form) {
var i=0;
var maga=0;
var magb=0;
var diff_value=0;

maga=form.mag1.value;
magb=form.mag2.value;

if (maga > 10.) {
	maga = 10.;
	form.mag1.value = 10.;
}

if (magb > 10.) {
	magb = 10.;
	form.mag2.value = 10.;
}

if (maga < -3.) {
	maga = -3.;
	form.mag1.value = -3.;
}

if (magb < -3.) {
	magb = -3.;
	form.mag2.value = -3.;
}

diff_value = maga-magb;
diff_value = Math.abs(diff_value);
diff_value = Math.round(diff_value *1000);
diff_value = diff_value/1000;

form.magmax.value = Math.max(maga,magb)
form.magmin.value = Math.min(maga,magb)

form.bigger.value = Math.pow(10,diff_value);
i = form.bigger.value.indexOf(".");
if (i > 0) {
form.bigger.value = form.bigger.value.substring(0,i+4);
}

form.stronger.value = Math.pow(10, (1.5*diff_value));
i = form.stronger.value.indexOf(".");
if (i > 0) {
form.stronger.value = form.stronger.value.substring(0,i+4);
}

form.diff.value = diff_value;
}
function calc_reset(form) {
form.mag1.value = 8.7;
form.mag2.value = 5.8;
form.bigger.value = " ";
form.stronger.value = " ";
form.diff.value = " ";
form.magmax.value = " ";
form.magmin.value = " ";
}
// End -->
</SCRIPT>

<style type="text/css">

<!--
input {
	font-size: large;
	text-align: center;
}
-->

</style>

<div class="calc" style="font-size: medium">
<FORM name="calculator">

<h2>Larger Magnitude:</h2>
<p><input type="number" style="width:66px" value="8.7" name="mag1" min="-3" max="10">Range is -3. to 10.</p>

<h2>Smaller Magnitude:</h2>
<p><input type="number" size="4" value="5.8" name="mag2" min="-3" max="10">
Range is -3. to 10.</p>

<input type="button" value="Calculate" style="background-color:#D4E4F0" onClick="calc_mag_nrg(this.form)">
<input type="button" value="Reset" onClick="calc_reset(this.form)">

<hr/>
<h2>Magnitude Difference: <input type="text" name="diff" value=" " size="10"></h2>

A magnitude
<input type="text" name="magmax" value=" " size="4">
earthquake<br/>

is
<input type="text" name="bigger" value=" " size="10">
times <strong>bigger</strong> than<br/>

a magnitude
<input type="text" name="magmin" value=" " size="4">
earthquake on a seismogram, <br/>

but is <input type="text" name="stronger" value=" " size="10">
times <b>stronger</b> (energy release).

</FORM>
</div>
