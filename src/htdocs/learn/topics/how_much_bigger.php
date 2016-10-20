<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	09/26/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'How much bigger is a magnitude 8.7 earthquake than a magnitude 5.8 earthquake?';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<div style="text-align: center; padding: .05in .05in .05in .05in; margin-left: 2in; margin-right: 2in; background-color:#00508F;color:#000000;">
  <a href="javascript:void()" OnClick="window.open('calculator.php','Calculator','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=1000');" style="text-decoration: none; color:#FFFFFF;">
    <b>"Try It Yourself" Calculator</b>
  </a>
 </div>

<p>
  A magnitude 8.7 earthquake is 794
  times BIGGER on a seismogram than a magnitude 5.8 earthquake.
  The magnitude scale is logarithmic, so
</p>
<PRE>
    <font color="gray">
       (10**8.7)/(10**5.8) = (5.01*10**8)/(6.31*10**5)
                           = .794*10**3
                           = 794
                         OR
                           = 10**(8.7-5.8)
                           = 10**2.9
                           = 794.328
  </font>
</PRE>
<p>
  Another way to get about the same answer without using a calculator is that
  since 1 unit of magnitude is 10 times the amplitude on a seismogram and 0.1
  unit of magnitude is about 1.3 times the amplitude, we can get,
</p>
<PRE>
  <font color="gray">
        10 * 10 * 10 / 1.3 = 769 times </font>
        [not exact, but a decent approximation]
</PRE>
<p>
  The magnitude scale is really comparing amplitudes of waves on a
  seismogram, not the STRENGTH (energy) of the quakes.  So, a magnitude 8.7
  is 794 times bigger than a 5.8 quake as measured on seismograms, but the 8.7
  quake is about 23,000 times STRONGER than the 5.8!  Since it is really the
  energy or strength that knocks down buildings, this is really the more
  important comparison.  This means that it would take about 23,000 quakes of
  magnitude 5.8 to equal the energy released by one magnitude 8.7 event.  Here's
  how we get that number:
</p>
<p>
  One whole unit of magnitude represents approximately 32 times (actually
  10**1.5 times) the energy, based on a long-standing empirical formula that
  says log(E) is proportional to 1.5M, where E is energy and M is magnitude.
  This means that a change of 0.1 in magnitude is about 1.4 times the energy
  release. Therefore, using the
  shortcut shown earlier for the amplitude calculation, the energy is,
</p>
<PRE>
  <font color="gray">
        32 * 32 * 32 / 1.4 = 23,405 or about 23,000
  </font>
</PRE>
<p>
  The actual formula would be:
</p>
<PRE>
  <font color="gray">
        ((10**1.5)**8.7)/((10**1.5)**5.8) = 10**(1.5*(8.7-5.8))
                                          = 10**(1.5*2.9)
                                          = 22,387
  </font>
</PRE>
<p>
  This explains why big quakes are so much more devastating than small ones.
  The amplitude ("size") differences are big enough, but the energy ("strength")
  differences are huge.  The amplitude numbers are neater and a little easier
  to explain, which is why those are used more often in publications.  But it's
  the energy that does the damage.
</p>
