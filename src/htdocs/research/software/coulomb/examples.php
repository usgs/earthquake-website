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

<h2>Coulomb 3 Stress Change Modeling Software Examples</h2>

<h3>Earthquake Examples</h3>

<figure class='left'>
  <img src="images/ex6.jpg" alt="">
  <figcaption>
    Zemmouri, Algeria
  </figcaption>
</figure>

<figure class='left'>
  <img src="images/ex2.jpg" alt="">
  <figcaption>
    Kobe, Japan
  </figcaption>
</figure>

<figure class='left'>
  <img src="images/ex4.jpg" alt="">
  <figcaption>
    Loma Prieta, CA
  </figcaption>
</figure>

<figure class='left'>
  <img src="images/ex5.jpg" alt="">
  <figcaption>
    Noto Hanto, Japan
  </figcaption>
</figure>

<br style="clear:left;"/>

<h3>Other Examples</h3>

<figure class='left'>
  <img src="images/ex7.jpg" alt="">
  <figcaption>
    Dike Examples
  </figcaption>
</figure>

<figure class='left'>
  <img src="images/ex1.jpg" alt="">
  <figcaption>
    Google Earth Output
  </figcaption>
</figure>

<figure class='left'>
  <img src="images/ex3.jpg" alt="">
  <figcaption>
    California Fault Database
  </figcaption>
</figure>
