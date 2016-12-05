<?php
$username="username";
$password="password";
$database="my_fondostudnomentano";

$titolo=$_POST['titolo'];
$materia=$_POST['materia'];
$prezzo=$_POST['prezzo'] + 0.5;
$classe=$_POST['classe'];
$proprietario=$_POST['proprietario'];
$stato=$_POST['stato'];
$recapito=$_POST['recapito'];
$condizioni=$_POST['condizioni'];
$isbn=$_POST['isbn'];


mysql_connect(localhost,$username,$password);

mysql_select_db($database)
   or die( "Impossibile selezionare il database.");

$query = "INSERT INTO mercatino VALUES('','$titolo','$materia','$prezzo','$classe','$proprietario','Disponibile','$recapito','$condizioni','$isbn','','','')";

mysql_query($query) or die( "Errore nella query. Query non eseguita");
mysql_close();
echo "Operazione conclusa con successo";
?>