<?php
switch ($_GET['cat'])
       {
	case ("terran"):
       include ("terran.php");
       break;

	case ("zerg"):
       include ("zerg.php");
       break;

	case ("protoss"):
       include ("protoss.php");
       break;

	default:
	echo  '<b>WYBIERZ RASÊ: </b></br></br>
		<a href=?id=choose&cat=terran><img src=images\terran.png></a>
		<a href=?id=choose&cat=zerg><img src=images\zerg.png></a>
		<a href=?id=choose&cat=protoss><img src=images\protoss.png></a>';
}
?>