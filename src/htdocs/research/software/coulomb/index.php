<?php
  // Author: Lisa Wald
  // Contact: Scott Haefner
  // Last modified: Lisa Wald, 2016/08/24
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<h2>Coulomb 3</h2>

<figure class='right'>
  <img src="images/indexcover.jpg" alt="example of Coulomb output">
</figure>

<ul>
  <li>
    <a href="/static/web/software/coulomb34.zip">Download software</a> (23.8 MB)
  </li>
  <li>
    <a href="https://pubs.usgs.gov/of/2011/1060/of2011-1060.pdf">View documentation</a> (18.5 MB)
  </li>
  <li>
    <a href="examples.php">View Examples</a>
  </li>
</ul>

<p>
  Coulomb is designed to investigate Coulomb stress changes on mapped faults and earthquake nodal planes, and is intended both for publication-directed research and for university teaching and instruction.
</p>

<p>
  One can calculate static displacements (on any surface or at GPS stations), strains, and stresses caused by fault slip, magmatic intrusion or dike expansion. Problems such as how an earthquake promotes or inhibits failure on nearby faults, or how fault slip or dike expansion will compress a nearby magma chamber, are germane to Coulomb. Geologic deformation associated with strike-slip faults, normal faults, or fault-bend folds is also a useful application. Calculations are made in an elastic halfspace with uniform isotropic elastic properties following Okada (1992).
</p>

<p>
  We believe that one learns best when one can see the most and can explore alternatives quickly. So the principal feature of Coulomb is ease of input, rapid interactive modification, and intuitive visualization of the results. The program has menus, sub-menus, check-items, and dialogue boxes to ease operation. The internal graphics are suitable for publication, and can be easily imported into illustration or animation programs for further enhancements.
</p>

<h3>References</h3>

<ul class='referencelist'>

  <li>
    <strong>Introduction without jargon or math:</strong><br/>
  Stein, R.S., <a href="http://www.scientificamerican.com/article/earthquake-conversations/">Earthquake conversations</a>, Scientific American, 288 (1), 72-79, January 2003.
  </li>

  <li>
    <strong>Coulomb stress change concepts (for strike-slip faults):</strong><br/>
  King, G.C.P., R.S. Stein, and J. Lin, <a href="https://profile.usgs.gov/myscience/upload_folder/ci2010Jul081439474296657%20King_Stein_Lin_BSSA_1994.pdf">Static stress changes and the triggering of earthquakes</a>, Bull. Seismol. Soc. Amer., 84 (3), 935-953, 1994.
  </li>

  <li>
    <strong>Coulomb stress concepts (for thrust faults and interaction between thrust and strike-slip faults):</strong><br/>
  Lin, J., and R.S. Stein, <a href="https://profile.usgs.gov/myscience/upload_folder/ci2010Jul011430054296620%20Lin_Stein_JGR_2004.pdf">Stress triggering in thrust and subduction earthquakes, and stress interaction between the southern San Andreas and nearby thrust and strike-slip faults</a>, J. Geophys. Res., 109, B02303, doi:10.1029/2003JB002607, 2004.
  </li>

  <li>
    <strong>Dislocation solution formulae:</strong><br/>
  Okada, Y., <a href="http://www.bssaonline.org/content/82/2/1018.abstract">Internal deformation due to shear and tensile faults in a half-space</a>, Bull. Seismol. Soc. Amer., 82 (2), 1018-1040, 1992.
  </li>

  <li>
    <strong>Application of Coulomb to seismic hazard:</strong><br/>
  Toda, S., R.S. Stein, P.A. Reasenberg, and J.H. Dieterich, Stress transferred by the Mw=6.5 Kobe, Japan, shock: Effect on aftershocks and future earthquake probabilities, J. Geophys. Res., 103, 24,543-24,565, 1998.<br/>
  Toda, S., and R.S. Stein, Response of the San Andreas fault to the 1983 Coalinga-Nu-ez Earthquakes: An application of interaction-based probabilities for Parkfield, J. Geophys. Res., 107, 10.1029/2001JB000172, 2002.<br>
  Toda, S., R. S. Stein, K. Richards-Dinger and S. Bozkurt (2005), Forecasting the evolution of seismicity in southern California: Animations built on earthquake stress transfer, J. Geophys. Res., B05S16, doi:10.1029/2004JB003415.
  </li>

  <li>
    <strong>Application of Coulomb to dike inflation:</strong><br/>
  Toda, S., R.S. Stein and T. Sagiya, Evidence from the 2000 Izu Islands swarm that seismicity is governed by stressing rate, Nature, 419, 58-61, 2002.
  </li>

  <li>
    <strong>Application of Coulomb to earthquake-volcano interaction:</strong><br/>
  Nostro, C., R. S. Stein, M. Cocco, M. E. Belardinelli and W. Marzocchi, <a href="http://onlinelibrary.wiley.com/doi/10.1029/98JB00902/abstract">Two-way coupling between Vesuvius eruptions and southern Apennine earthquakes (Italy) by elastic stress transfer</a>, J. Geophys. Res., 103, pp. 24,487-24,504, 1998.
  </li>

</ul>
