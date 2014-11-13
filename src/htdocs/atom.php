<?php

include_once '_features.inc.php';

header('Content-Type: application/atom+xml');
echo $RESEARCH_FEATURES->toAtom();
