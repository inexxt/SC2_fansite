<?php

if(!isset($_POST['ada']) || $_POST['ada']==0)
{
$_POST['ada']==1;
echo "<form action=\"index.php?id=zal&cat=automat\" method=\"post\" >
     	Ile wpłacasz: <input type=\"text\" name=\"ile\" size = 6/><br/>
     	Cena napoju: <input type=\"text\" name=\"cena\" size = 5/><br/>
	<input type=\"submit\" value=\"Wyślij\" algin=\"center\"/><br/>
   	</form>";
}
else
{
	$_POST['ada']==0;
	$kwota = $_POST['ile'] - $_POST['cena'];
	$kwota *=10;
	while ($kwota >= 50) 
	{
		$kwota -=50;
		$tab[50]++;
	}
	while ($kwota >= 20) 
	{
		$kwota -=20;
		$tab[20]++;
	}
	while ($kwota > 10) 
	{
		$kwota -=10;
		$tab[10]++;
	}
	while ($kwota >= 5) 
	{
		$kwota -=5;
		$tab[5]++;
	}
	while ($kwota >= 2) 
	{
		$kwota -=2;
		$tab[2]++;
	}
	$tab[1] += $kwota;
	echo "5 zlotowki: $tab[50] <br/>
			2 zlotowki: $tab[20] <br/>
			1 zlotowki: $tab[10] <br/>
			50 groszowki: $tab[5] <br/>
			20 groszowki: $tab[2] <br/>
			10 groszowki: $tab[1]";
}
?> 