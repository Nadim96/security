<?php
include 'connection.php';

if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
	$gebruikersnaam = $_POST['gebruikersnaam'];
	//Voeg een md5 encryptie toe aan het wachtwoord
	$wachtwoord = $_POST['wachtwoord'];

	$wachtwoordhash = [
    'cost' => 12,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
	];
	$wachtwoordhashed = password_hash($wachtwoord, PASSWORD_BCRYPT, $wachtwoordhash);

	$sql = "insert into gebruiker(gebruikersnaam, wachtwoord) VALUES('$gebruikersnaam', '$wachtwoordhashed')";
	$result = mysqli_query($conn, $sql);

	$_SESSION['salthash'] = $result;
	header('Location: opdracht3.php');
	

}


?>
