<?php
$id=$_GET['id'];
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino_utenti SET pronta='2' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");
$query1 ="SELECT * FROM mercatino_utenti WHERE id = '$id'";
$risultati=mysql_query($query1);
$destinatario=mysql_result($risultati,$i,"mail");
mysql_close();
 
$oggetto="Prenotazione Mercatino Nomentano ritirata";
$msg="Ciao! La prenotazione da te fatta sul sito del mercatino ci risulta essere stata ritirata, da questo momento non sara' piu' possibile per te effettuare l'accesso al tuo account. Ti ringraziamo per aver usato questo nostro servizio.";
$mittente="mercatino@nomentano.tk";
$headers="From: " . $mittente;

mail($destinatario, $oggetto, $msg, $headers);
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
$query23 = "UPDATE mercatino_utenti SET psw='collettivo' WHERE id='$id'";

mysql_query($query23) or die( "Errore nella query1. Query non eseguita");


mysql_close();

echo "La prenotazione è stata segnalata come consegnata";
?>


