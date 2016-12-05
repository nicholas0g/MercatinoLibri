<?php
$id=$_GET['id'];
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino_utenti SET pronta='1' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");

$query1 ="SELECT * FROM mercatino_utenti WHERE id = '$id'";
$risultati=mysql_query($query1);
$destinatario=mysql_result($risultati,$i,"mail");
mysql_close();
 
$oggetto="Prenotazione Mercatino Nomentano pronta per essere ritirata";
$msg="Ciao! La prenotazione da te fatta sul sito del mercatino e' pronta per essere ritirata! Ti aspettiamo!";
$mittente="mercatino@nomentano.tk";
$headers="From: " . $mittente;

mail($destinatario, $oggetto, $msg, $headers);


echo "La prenotazione e' stata segnalata come pronta per la vendita";

?>