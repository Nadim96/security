<?php
include 'connection.php';

if (isset($_GET['timewaited'])) {
	$waited = $_GET['timewaited'];
}

 if (isset($_SESSION['loc'])) {
          $location = $_SESSION['loc'];
       if (isset($_SESSION['md5'])) {
       		$md5 = $_SESSION['md5'];
       		unset($_SESSION['md5']);
       	}elseif (isset($_GET['timewaited'])) {
       		$timewaited = $_GET['timewaited'];
       		echo "kek";
       	}else{
          if ($location != '/securityhash/opdracht1.php') {
            echo "WOW! Opdrachten overslaan? dat hoort niet h&eacute;! Keer terug naar <a href='opdracht1.php'>opdracht 1</a>";
        }
       }
      }


      $_SESSION['loc']=$_SERVER['PHP_SELF'];

?>


<?php

  if ($location == '/securityhash/opdracht1.php') {
	echo "Eerste opdracht zit er op! in <b>opdracht 2</b> zullen wij kijken naar MD5 hashing en waarom dit <b>NIET</b> wordt aangeraden.<br>";


?>

<h3><b> Opdracht 2 </b></h3>
<p>Maak opnieuw een account aan door een 'gebruikersnaam' en 'wachtwoord' in te voeren en op de knop 'maak account' te klikken:</p>

<form action="md5.php" method="POST">
<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required/><br><br>
<input type="text" name="wachtwoord" placeholder="wachtwoord" required/><br><br>
<input type="submit" value="Maak accocount"/>
</form>

<?php

}

if (isset($md5)) {
	
	 	$sql = "SELECT * FROM gebruiker ORDER BY id DESC LIMIT 1";
		$results = mysqli_query($conn, $sql);


		while (list($id, $gebruikersnaam, $wachtwoord)=mysqli_fetch_row($results)) {
		echo "<b>voornaam:</b> " . $gebruikersnaam . " <b>wachtwoord: </b>" . $wachtwoord . "<br><br>";
		$success = $results;
		}

echo "Zoals je kan zien is het wachtwoord opgeslagen als hash (md5), hierdoor is het wachtwoord niet meer zichtbaar in plain text.<br><br>
Het lijkt veilig, toch? Nee! hoewel dit is opgeslagen als hash en het dus onmogelijk is om te decrypten is er toch een andere manier om aan de plain-text versie te komen.<br><br>
Wat mensen hebben gedaan is md5 generatoren gemaakt die veel verschillende hashes opslaat in een database. Hierdoor kan er in de tabel gekeken worden of een hash overeenkomt, 
als dit overeenkomt is de plain-text ook bekend.<br><br>";
		?>

<h3><b> Opdracht 2.1 </b></h3>
<p> Ga naar de volgende website (opent een nieuw tabblad) <a href='http://www.md5online.org/' target="_blank">md5online</a> en converteer jouw hashed wachtwoord <b>tip:</b> kom je er niet uit? kijk op de github pagina voor uitleg (<b>code 1</b>)


<div id="countdown"></div>
<div id="done"></div>

<script type="text/javascript">
(function countdown(remaining) {
  var firstInput = "Nog ";
  var lastInput = " seconden voordat je door kan gaan naar de volgende opdracht, kan je net zogoed opdracht 2.1 uivoeren, toch?";
  var doneInput = "Opdracht 2 is successvol uitgevoerd, ga nu verder naar "
  var done = "<a href='opdracht3.php'>opdracht 3</a>";
    if(remaining === 0){
    document.getElementById('done').innerHTML = doneInput + done;
    document.getElementById('countdown').style.display = "none";
  }
  

    document.getElementById('countdown').innerHTML = firstInput + remaining + lastInput;
    setTimeout(function(){ countdown(remaining - 1); }, 1000);
})(60);
</script>

<h3><b> Opdracht 2 </b></h3>
<p>Maak opnieuw een account aan door een 'gebruikersnaam' en 'wachtwoord' in te voeren en op de knop 'maak account' te klikken:</p>

<form action="md5.php" method="POST">
<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required/><br><br>
<input type="text" name="wachtwoord" placeholder="wachtwoord" required/><br><br>
<input type="submit" value="Maak account"/>
</form>
		<?php
}

?>