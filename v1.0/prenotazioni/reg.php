 <?php
 
$username="username";
$password="password";
$database="my_fondostudnomentano";

$nome=$_POST['nome'];
$mail=$_POST['mail'];
$psw=$_POST['psw'];


mysql_connect(localhost,$username,$password);

mysql_select_db($database)
   or die( "Impossibile selezionare il database.");

$query1 = "SELECT * FROM mercatino_utenti WHERE mail='$mail'";   
$risultati=mysql_query($query1);
$num=mysql_numrows($risultati);
if ($num == 1) {
echo "Questo indirizzo mail sembra essere gia' registrato! ";
echo "Riprova!<br>Attendi 5 secondi, se il redirect non procede clicca ";
header( "refresh:5;url=dw.html" );
echo "<a href=dw.html>qui</a>.";
}
else if ($num==0){

mysql_connect(localhost,$username,$password);

mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "INSERT INTO mercatino_utenti VALUES('','$nome','$mail','$psw','','','')";

mysql_query($query) or die( "Errore nella query. Query non eseguita");

echo "Utente registrato correttamente! Ora sei pronto ad effettuare l'accesso e a prenotare i tuoi libri!";
echo "Attendere 5 secondi, se il redirect non procede clicca ";
header( "refresh:5;url=dw.html" );
echo "<a href=dw.html>qui</a>.";
}
mysql_close();
?>