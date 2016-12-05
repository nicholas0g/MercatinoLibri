<?php
$id=$_GET['id'];

mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino SET stato='Disponibile',np='0' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");

mysql_close();
echo "Libro Rimosso dalla Prenotazione";
?>