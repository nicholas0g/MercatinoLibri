<?php
$id=$_GET['id'];
$database="my_fondostudnomentano";

mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
$query = "UPDATE mercatino_utenti SET conf='1' WHERE id='$id'";   
mysql_query($query) or die( "Errore nella query 4. Query non eseguita");
   
echo "La tua lista prenotazioni e' stata confermata. I gestori ora prepareranno la tua pila di libri in modo tale che potrai ritirarli tutti in una volta!<br>Potrai visualizzare lo stato della preparazione da questo pannello, riceverai una mail appena i tuoi libri saranno pronti!<br>Non dimenticare di passare a prendere i tuoi libri! Dopo tre giorni che non sono ritirati la prenotazione scade!";
echo "<br>Per qualsiasi info non esitare a contattarci! Riceverai una e-mail quando potrai venire a ritirare la tua prenotazione";
 
   ?>