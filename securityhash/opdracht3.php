<?php
include 'connection.php';


if (isset($_SESSION['loc'])) {
     $location = $_SESSION['loc'];
     if (isset($_SESSION['salthash'])) {
       		$salthash = $_SESSION['salthash'];
       		unset($_SESSION['salthash']);
       	}else{
        if ($location != '/securityhash/opdracht2.php') {
           echo "WOW! Opdrachten overslaan? dat hoort niet h&eacute;! Keer terug naar <a href='opdracht1.php'>opdracht 1</a>";
       }
   }
  }

   $_SESSION['loc']=$_SERVER['PHP_SELF'];

?>


<?php

if (isset($salthash)) {
	 	$sql = "SELECT * FROM gebruiker ORDER BY id DESC LIMIT 1";
		$results = mysqli_query($conn, $sql);


		while (list($id, $gebruikersnaam, $wachtwoord)=mysqli_fetch_row($results)) {
		echo "<b>voornaam:</b> " . $gebruikersnaam . " <b>wachtwoord: </b>" . $wachtwoord . "<br><br>";
		$success = $results;
		}

		echo "<p>herken jij dit plaatje nog uit de presentatie?<br><img src='images/example_bcrypt.jpg'></img><br>
		Vergelijk het met jouw salt hashed password bovenaan de pagina. Lijkt het op elkaar? dan is het gelukt!<br><br>
		Je weet nu hoe je veilig een wachtwoord kan opslaan (moet je alleen nog wel de code doornemen in securityhash/salthash.php). Ga nu verder met opdracht 3.2 hieronder";



		echo "<h3><b> Opdracht 3.2</b></h3> Doorloop de code in je htdocs map securityhash en pas wat dingen aan.<br>1. in opdracht 2 is MD5 gebruikt als hash methode, 
		verander dit naar SHA (uitwerking code 2 op github).<br>2. Verander de algoritme optie (cost) aan naar een andere waarde (niet hoger dan 16 - uitwerking code 3 op github)
		<br>3. (optioneel) verander de countdown timer van 60 seconden naar een andere waarde (uitwerking code 4 op github<br><br>";

		echo "<b>Belangrijk! in te leveren onderdelen (zip file):</b><br>
		1. Exporteer jouw security database<br>2. Voeg je htdocs map 'securityhash' toe aan deze zip-file.";
}else{
	?>


<?php

  if ($location == '/securityhash/opdracht2.php') {
echo "<p id='into'>Wij zijn bij de derde opdracht aangekomen, nu laten we je zien hoe het <b>w&eacute;l</b> moet!<br>
</p>";


?>

<h3><b> Opdracht 3</b></h3>
<p>Maak opnieuw nogmaals een account aan door een 'gebruikersnaam' en 'wachtwoord' in te voeren en op de knop 'maak account' te klikken:</p>

<form action="salthash.php" method="POST">
<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required/><br><br>
<input type="text" name="wachtwoord" placeholder="wachtwoord" required/><br><br>
<input type="submit" value="Maak account"/>
</form>

<?php
	}
}
?>