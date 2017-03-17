# security

LEES:

Wat is hash?

Een hashfunctie is een functie in de informatica die invoer uit een breed domein van waarden
omzet in een (meestal) kleiner bereik, meestal een deelverzameling van de gehele getallen.

Wanneer je een wachwoord hashed dan zijn er 2 belangrijke onderwerpen. Eén is welke algorithm je gebruikt. De andere is de salt. Met combinatie van alle 2 onderwerpen wordt het brute-forcen erg lastig.


Wat is a salt?

Een cryptographic salt is data dat wordt toegepast gedurend de hashing proces.

Het zorgt ervoor de output van de data wordt opgezocht in een lijst van berekende hashes en hun output veranderd dat bekend staat als een rainbow table.

Een salt is een stukje data dat de hashed code moeilijk maakt om te cracken.

Stap 1:

Download de bestanden (pas geen bestandsnamen aan).

![Alt text](https://puu.sh/uM79R.png)

Stap 2:

Importeer het bestand 'SQLSecurity.sql' uit het mapje 'database' via PhpMyAdmin, MySQL Workbench of een andere tool.

Stap 3:

Sla het mapje 'securityhash' op in je htdocs folder (maak geen aanpassingen).

![Alt text](https://puu.sh/uMTxY.png)

Stap 4:

4.1 Open het bestand http://localhost/securityhash/connection.php zie je geen error? dan werkt het!

4.2 Werkt het niet? pas dan de 'naam' en 'wachtwoord' aan op de plek in de afbeelding hieronder; standaard is dit 'root' en ''

![Alt text](https://puu.sh/uM7CF.png)

Stap 5:

Navigeer naar http://localhost/securityhash/opdracht1.php of http://127.0.0.1/securityhash/opdracht1.php  en volg de stappen die staan beschreven.

Kom je ergens niet uit? wij lopen rond, spreek ons aan!


--------------------------------------------------------------------------------------------------------------------------------

Code 1:

invoeren:

![Alt text](https://puu.sh/uLBfd.jpg)

Resultaat:

![Alt text](https://puu.sh/uLBgl.jpg)

