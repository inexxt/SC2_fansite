	<center>
	</br>
	</br>
	</br>
	</br>
	</br>
	<?php
		$LOGIN = $_POST['logina'];
		$HASLO = $_POST['hasloa'];
		$dane = fopen("dane.txt", "r");
		$LOGINd = fgets($dane);
		$HASLOd = fgets($dane);
		fclose($dane);
		if ( $HASLOd == $HASLO )
		{
			echo "Pomyœlnie zalogowano. Przekierowywanie.";
			sleep(3);
			header("Location: home.php");
		} 
		else 
		{
			echo "Niepoprawne dane";
			sleep(2);
			//header("Location: index.php");
		}
		

	?>
