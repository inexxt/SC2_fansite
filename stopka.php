</br>
</br>
<div id="STOPKA">
<?php

	$opr=fopen("licznik.txt", "r");
	$ile=fread($opr, 100);
	fclose($opr);
	$ile++;
	$wartosc = 1;

	if (!isset($_COOKIE["mmu"])) 
	{
		setcookie("mmu", $wartosc, time()+3600);
		if (!isset($_SESSION['zmienna']))
		{
			
			$_SESSION['zmienna'] = 1;
			$opw=fopen("licznik.txt", "w");
			fwrite($opw, $ile);
			fclose($opw);	
		}
	}
	echo "<font color=\"blue\">Jestes $ile gosciem</br><font>";
	error_reporting(E_ALL ^ E_WARNING); 
	$data = date("Y-m-d");
	$godzina = date("H:m");
	echo "<font size = 4><b>Jest $godzina dnia $data</b></font>";
?>
</div>
</center>
</div>
</div>

</body>
</html>
