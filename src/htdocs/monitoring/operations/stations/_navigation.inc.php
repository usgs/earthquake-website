<?php
  include_once 'functions.inc.php';

  if (isset($properties['virtual_networks'])) {
    $networks = $properties['virtual_networks'];
  } else {
    $networks = array('ANSS', 'GSN');
  }

  foreach ($networks as $net) {
    $upperNet = strtoupper($net);

    echo '<a class="up-one-level" ' .
        'href="/monitoring/operations/network.php?virtual_network=' .
        $upperNet . '">' . $upperNet . ' Status</a>';
  }
