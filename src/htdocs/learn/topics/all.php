<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'All Links';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }

			$_GET['all'] = 1;
			include "display.inc.php";
?>
