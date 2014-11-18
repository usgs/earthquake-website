<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Home Page';
	$HEAD = '<link rel="stylesheet" href="index.css"/>';
	include 'template.inc.php';
}

?>

<div class="main-featured row two-up">
  <h2 class>Featured Item #1 Title</h2>
  <div class="column">
    <img src="http://placehold.it/512x512" alt="Placeholder"/>
  </div>
  <div class="column">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus,
      sapien ut consectetur dictum, nisl eros scelerisque est, at consectetur
      odio ipsum nec ante. Integer porta nisi quis pharetra consequat. Nunce
      lementum risus a facilisis dignissim. Sed euismod ante at nunc sodales
      sollicitudin. Nunc sodales faucibus nibh, vitae porttitor nibh faucibus
      nec. Donec auctor imperdiet dui non malesuada. Nulla id dignissim erat.
    </p>
    <p>
      Nullam aliquet massa ut eros iaculis, ac rhoncus velit iaculis.
      Pellentesque massa nibh, pulvinar sed leo nec, hendrerit vehicula lorem.
      Suspendisse potenti. Ut porta diam nec facilisis eleifend. Suspendisse eu
      sem a metus facilisis pulvinar et aliquam ipsum. Nunc bibendum diam ac
      lectus fermentum, vel eleifend elit congue. Curabitur lacinia sem diam.
      Ut lacus felis, consectetur vel arcu eget, finibus malesuada nisi. Mauris
      mattis luctus mi, et vulputate augue condimentum eget. Pellentesque
      habitant morbi tristique senectus et netus et malesuada fames ac turpis
      egestas.
    </p>
    <button class="cta">Call to Action</button>
  </div>
</div>

<ul class="sub-features">
  <li>
    <h2><a href="#f2">Sub Featured Item #2</a></h2>
    <p>
      Etiam hendrerit facilisis dolor, et molestie nibh commodo consectetur.
      Maecenas suscipit est nisi, bibendum mollis dolor efficitur id. Integer
      elementum lacinia urna, a eleifend ex congue vitae. Sed vel cursus mauris.
      Integer lobortis, erat id mattis venenatis, lorem massa pellentesque enim,
      quis pharetra ipsum lacus ac justo. Cum sociis natoque penatibus et magnis
      dis parturient montes, nascetur ridiculus mus. Nulla vitae malesuada erat.
      Curabitur ut euismod erat, in varius erat. Nunc rutrum sem quam. Sed
      ullamcorper, nisi ac convallis congue, dui felis elementum lacus, a
      fringilla lectus urna eget nulla. Class aptent taciti sociosqu ad litora
      torquent per conubia nostra, per inceptos himenaeos.
    </p>
  </li>
  <li>
    <h2><a href="#f3">Sub Featured Item #3</a></h2>
    <p>
      Ut at dui nisi. Cras non odio sem. Praesent molestie ante vel metus
      fringilla rutrum. Suspendisse nisi tortor, vehicula in laoreet malesuada,
      aliquam eget ipsum. Nulla facilisi. Maecenas imperdiet dui est, quis
      condimentum urna varius vel. Cum sociis natoque penatibus et magnis dis
      parturient montes, nascetur ridiculus mus. Sed ut dui vitae nisi dignissim
      placerat. Proin enim lorem, posuere at volutpat non, imperdiet sit amet
      urna. Proin quis molestie nibh, non pulvinar sem. Proin rutrum nisl eget
      tellus tempus, pellentesque accumsan tortor rhoncus.
    </p>
  </li>
</ul>

<section class="two-up sections row">
  <ul class="column">
    <li>
      <h3><a href="/earthquakes/">Earthquakes</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/hazards/">Hazards</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/data/">Data &amp; Products</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
  </ul>
  <ul class="column">
    <li>
      <h3><a href="/learn/">Learn</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/monitoring">Monitoring</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
    <li>
      <h3><a href="/research/">Research</a></h3>
      <div class="row">
        <img src="http://placehold.it/128x128" alt="Placeholder" class="column one-of-four"/>
        <p class="column three-of-four">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          faucibus, sapien ut consectetur dictum, nisl eros scelerisque est, at
          consectetur odio ipsum nec ante.
        </p>
      </a>
    </li>
  </ul>
</section>
