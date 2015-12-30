<?php
    switch ($_GET['id'])
        {
        case ("opis"):
        include ("opis.php");
        break;

        case ("wymagania"):
        include ("wymagania.php");
        break;

        case ("choose"):
        include ("choose.php");
        break;

	 case ("zal"):
        include ("zal.php");
        break;

	 case ("about"):
        include ("about.php");
        break;

	 case ("galeria"):
        include ("galeria.php");
        break;

        default:
        include ("home.php");
        }
 ?>