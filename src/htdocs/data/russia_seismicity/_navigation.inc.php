<?php
  $section = "/data/russia_seismicity";

  echo "<a href='/data' class='up-one-level'>Data &amp; Products</a>";

  echo navGroup(("Seismicity of Russia and the Former Soviet Union") ,

    navItem("${section}/index.php", "Introduction") .
    navItem("${section}/sourcecatalogs/", "Source Catalogs") .
    navItem("${section}/regionalcatalogs/", "Regional Catalogs") .
    navItem("${section}/seismicstations.php", "Seismic Stations") .
    navItem("${section}/bibliography.php", "Bibliography")

  );
?>
