<html>
<head>
   <title>Fajna strona</title>
</head>
<body background = "Ap.jpg">

<?php

if (!isset($_COOKIE["ankieta"])) 
{	
	$war = 1;
	setcookie("ankieta", $war, time()+100); 
	echo"			
		Lubisz placki? <br/>
		<table border=\"0\">
								
			<form action = \"ankieta.php\"; method=\"post\">
			<tr><td><input type=\"radio\" name=\"a\" value=\"1\">TAK</td>
			<tr><td><input type=\"radio\" name=\"a\" value=\"0\">Lubiê</td>
			<input type=\"submit\" name = \"przycisk\" value=\"Wyslij\" algin=\"center\"/><br/>
		</table>";

}
else
{
	$wyniki = fopen("wyniki.txt", "r");
	$opc1 = fgets($wyniki);
	$opc2 = fgets($wyniki);
	if ($_POST['a'] == 1) $opc1++;
			     else $opc2++;

	fclose($wyniki);
	$wyniki = fopen("wyniki.txt", "w");
	$wypisz = $opc1 . "\n" . $opc2;
	fwrite($wyniki, $wypisz);
	fclose($wyniki);
	echo "WYNIKI ANKIETY <br/>";
	echo "$opc1";
	echo "<br/>";
	echo "$opc2";

}						
?>
</body>
</html>