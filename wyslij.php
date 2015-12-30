<?php


		$to = "$_POST[email]";
		$topic = "$_POST[temat]";
		$message = "<img src=\"$_POST[img]\"> <br> $_POST[tresc]";
		$naglowki = "Reply-to: \$_POST[mailo]".PHP_EOL;
		$naglowki .= "From: Serwis_kartkowy".PHP_EOL;
		$naglowki .= "MIME-Version: 1.0".PHP_EOL;
		$naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL;



	mail("$to","$topic","$message", "$naglowki");
	echo "Wys³ano";




?>