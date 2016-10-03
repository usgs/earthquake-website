<?php
  include_once 'functions.inc.php';
  include_once dirname(__DIR__) . '/conf/config.inc.php';

  if (isset($properties['virtual_networks'])) {
    $networks = $properties['virtual_networks'];
  } else {
    $networks = array('ANSS', 'GSN');
  }

  foreach ($networks as $net) {
    $net = strtoupper($net);

    echo '<a class="up-one-level" ' .
        'href="' . $NETOPS_BASEPATH . '/network.php?virtual_network=' .
        $net . '">' . $net . ' Status</a>';
  }
