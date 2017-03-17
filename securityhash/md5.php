<?php
include 'connection.php';

if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
	$gebruikersnaam = $_POST['gebruikersnaam'];
	
	$wachtwoord = md5($_POST['wachtwoord']);

	$sql = "insert into gebruiker(gebruikersnaam, wachtwoord) VALUES('$gebruikersnaam', '$wachtwoord')";
	$result = mysqli_query($conn, $sql);

	$_SESSION['md5'] = $result;
	header('Location: opdracht2.php');

}

?>