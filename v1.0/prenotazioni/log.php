 <?php
 
$username="username";
$password="password";
$database="my_fondostudnomentano";

$mail=$_POST['mail'];
$psw=$_POST['psw'];


mysql_connect(localhost,$username,$password);

mysql_select_db($database)
   or die( "Impossibile selezionare il database.");

$query1 = "SELECT * FROM mercatino_utenti WHERE mail='$mail' and psw='$psw'";   
$risultati=mysql_query($query1);
$num=mysql_numrows($risultati);
if ($num==1){
$id=mysql_result($risultati,$i,"id");




 header("location: logok.php?id=$id"); 
}

if ($num==0){


echo "Nome utente o password errati!";
echo "Attendere 5 secondi, se il redirect non procede clicca ";
header( "refresh:5;url=dw.html" );
echo "<a href=dw.html>qui</a>.";
}
mysql_close();
?>