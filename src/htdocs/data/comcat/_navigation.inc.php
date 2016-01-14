<?php


echo navItem('/data/comcat/index.php',
    'About ANSS Comprehensive Catalog and Important Caveats');

echo navGroup('Metadata',
    navItem('/data/comcat/catalog/', 'Catalogs') .
    navItem('/data/comcat/contributor/', 'Contributors'));

?>
