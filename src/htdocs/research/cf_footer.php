<?php

// for navItem function
include_once 'functions.inc.php';

if (!isset($TEMPLATE)) {
  // buffer header, so it can be discarded
  ob_start();
  $TITLE = 'this doesn\'t matter';
  $NAVIGATION =
      '<a href="/research/external" class="up-one-level">External Grants</a>' .
      '<section>' .
          navItem('/cfusion/external_grants/research.cfm', 'Funded Research') .
          navItem('/cfusion/external_grants/networks.cfm', 'Funded Networks') .
          navItem('/cfusion/external_grants/monitoring_upgrades.cfm', 'ARRA-Funded Monitoring Upgrades') .
          navItem('/research/external/forpis.php', 'Info for PIs') .
          navItem('/research/external/contact.php', 'Contacts') .
      '</section>';
  include 'template.inc.php';
}

// discard header
ob_clean();

// footer, navigation output after return
return;
