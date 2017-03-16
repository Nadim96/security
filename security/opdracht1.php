<?php
//Pas deze code NIET aan
include 'connection.php';



$_SESSION['loc']=$_SERVER['PHP_SELF'];

if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
	$gebruikersnaam = $_POST['gebruikersnaam'];
	$wachtwoord = $_POST['wachtwoord'];

	$sql = "insert into gebruiker(gebruikersnaam, wachtwoord) VALUES('$gebruikersnaam', '$wachtwoord')";
	$result = mysqli_query($conn, $sql);
	$account = $result;

}

if (isset($account)) {
	    $sql = "SELECT * FROM gebruiker ORDER BY id DESC LIMIT 1";
		$results = mysqli_query($conn, $sql);


		while (list($id, $gebruikersnaam, $wachtwoord)=mysqli_fetch_row($results)) {
		echo "<b>voornaam:</b> " . $gebruikersnaam . " <b>wachtwoord: </b>" . $wachtwoord . "<br><br>";
		$success = $results;
		}

		if (isset($success)) {
			echo "Zoals je kunt zien is deze manier van wachtwoorden opslaan (geen ecryptie) zeer onveilig, je wachtwoord staat in de database als plain text.<br>
			Lukt het personen om in jouw database te komen? dan heb je een groot probleem.<br>
			Dit willen wij graag voorkomen! Ga nu naar <a href='opdracht2.php'>Opdracht 2</a> om te leren hoe je het snel al een stuk veiliger kan maken!";
		}	
}


?>

<h3><b> Opdracht 1 </b></h3>
<p>Maak een account aan door een 'gebruikersnaam' en 'wachtwoord' in te voeren en op de knop 'maak account' te klikken:</p>

<form action="opdracht1.php" method="POST">
<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required/><br><br>
<input type="text" name="wachtwoord" placeholder="wachtwoord" required/><br><br>
<input type="submit" value="Maak account"/>
</form>

<?php



?>