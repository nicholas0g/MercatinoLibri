<?php
$idl=$_GET['idlibro'];
$idp=$_GET['idprenotazione'];
$db="my_fondostudnomentano";


if( isset($_GET['versione']))
{
if($_GET['versione']=="1.0")
{
/*inizio comandi per la versione 1.0 */
if( isset($_GET['act']))
{
if($_GET['act']=='aggiungi')
{
/*codice per aggiunta libri */
$titolo=$_GET['titolo'];
$materia=$_GET['materia'];
$prezzo=$_GET['prezzo'] + 0.5;
$classe=$_GET['classe'];
$proprietario=$_GET['proprietario'];
$stato=$_GET['stato'];
$recapito=$_GET['recapito'];
$condizioni=$_GET['condizioni'];
$isbn=$_GET['isbn'];
mysql_connect(localhost,$username,$password);
mysql_select_db($db)
or die( "Impossibile selezionare il database.");
$query = "INSERT INTO mercatino VALUES('','$titolo','$materia','$prezzo','$classe','$proprietario','Disponibile','$recapito','$condizioni','$isbn','','','')";
mysql_query($query) or die( "Errore nella query. Query non eseguita");
mysql_close();
echo "Operazione conclusa con successo. $titolo di $proprietario al prezzo di $prezzo con codice $isbn inserito.";
/*fine codice precedente*/
}
if($_GET['act']=='vendi')
{
/*codice per vendere libri */
/*fine codice precedente*/
}
if($_GET['act']=='ricerca')
{
/*codice per ricercare libri */
/*fine codice precedente*/
}
if($_GET['act']=='prenotazioni')
{
/*codice per gestire prenotazioni libri */
/*fine codice precedente*/
}

}
/* fine comandi per la versione 1.0*/
}
/*fine comandi per l'evento act*/
/*riga ipotetica versioni successive*/
/*riga conclusiva evento versione generico*/
}
else{
/*se non viene eseguita nessuna azione*/
echo "Login eseguito correttamente";
/*fine codice precedente*/
}
?>