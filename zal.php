<?php
switch ($_GET['cat'])
       {
	case ("ankieta"):
       include ("ankieta.php");
       break;

	case ("wyznaczniki"):
       include ("wyznaczniki.php");
       break;

	case ("automat"):
       include ("automat.php");
       break;

	case ("kartki"):
       include ("kartki.php");
       break;

	default:
	echo  '<div style = \"list-style-type: circle\">
		<li><a href=?id=zal&cat=automat> Automat </a></li>
		<li><a href=?id=zal&cat=wyznaczniki> Wyznaczniki </a></li>
		<li><a href=?id=zal&cat=ankieta> Ankieta </a></li>
		<li><a href=?id=zal&cat=kartki> Serwis Kartkowy </a></li>
		</div>';
}
?>