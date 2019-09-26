<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	1/30/2017
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Only USGS Links';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }

			$_GET['usgs'] = 1;
			include "display.inc.php";
?>
