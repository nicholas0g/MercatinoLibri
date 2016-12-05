<?php
if( isset($_GET['act']) )

{
  if( $_GET['act'] == 'venduto' )
  {
  $dare=$_GET['ss'];
  $id=$_GET['id'];
  
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino SET stato='Venduto',dare='$dare',dati='NO' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");

mysql_close();
echo "Libro Segnato come venduto";

  }
  
 if( $_GET['act'] == 'consegnati' )
  {
   
    $id=$_GET['id'];
  
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino SET dati='SI' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");
mysql_close();
echo "Somma segnata come consegnata";

}
 
if( $_GET['act'] == 'ridati' )
  {
   
    $id=$_GET['id'];
  
mysql_connect(localhost,$username,$password);
$database="my_fondostudnomentano";
mysql_select_db($database)
   or die( "Impossibile selezionare il database.");
   
$query = "UPDATE mercatino SET stato='Ritirati' WHERE id='$id'";

mysql_query($query) or die( "Errore nella query. Query non eseguita");
mysql_close();
echo "Libro segnato come ridato al proprietario";

}

} 


?>



