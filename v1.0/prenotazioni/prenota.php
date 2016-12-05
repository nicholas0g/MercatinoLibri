<?php
$idp=$_GET['idp'];
$id=$_GET['id'];
$database="my_fondostudnomentano";
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query ="SELECT * FROM mercatino WHERE np='$idp'";
 $risultati=mysql_query($query);
 $query23 ="SELECT * FROM mercatino WHERE id='$idp'";
 $risultati23=mysql_query($query23);
         $conf=mysql_result($risultati23,$i,"conf");
         
if ($conf=='1')
{echo "LA TUA PRENOTAZIONE RISULTA ESSERE GIA' STATA CONFERMATA. Non si possono prenotare ulteriori libri dopo che la prenotazione e' stata confermata!";
}

else
{




mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   $query1 = "SELECT * FROM mercatino_utenti WHERE id='$idp'";
   mysql_query($query1) or die( "Errore nella query 1. Query non eseguita");
$risultati1=mysql_query($query1);
$n=mysql_result($risultati1,$i,"n");
$query4 = "SELECT * FROM mercatino WHERE id='$id'";
   mysql_query($query4) or die( "Errore nella query 4. Query non eseguita");
$risultati2=mysql_query($query4);
$stato=mysql_result($risultati2,$i,"stato");
if ($stato== 'Disponibile')
{
   if ($n==10)
   {
   echo "HAI RAGGIUNTO IL NUMERO MASSIMO DEI 10 LIBRI PRENOTABILI!";
   echo "<br>Per chiarimenti o ulteriori info contatta gli amministratori.";
   echo "<br> Se non l'hai ancora fatto, conferma le tue prenotazioni!";
   }
   if ($n < 10)
   {
$n1= $n + +1;
$query2 = "UPDATE mercatino_utenti SET n='$n1' WHERE id='$idp'";
mysql_query($query2) or die( "Errore nella query 3. Query non eseguita");
$query = "UPDATE mercatino SET np='$idp', Stato='Prenotato' WHERE id='$id'";
mysql_query($query) or die( "Errore nella query 2. Query non eseguita");

mysql_close();
echo "Libro correttamente prenotato. Ora puoi chiudere questa finestra";
}
}
else
echo "Risulta che questo libro sia già stato prenotato o che comunque non sia più disponibile! Riprova!";
}
?>
