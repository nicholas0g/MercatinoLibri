<?php
$id=$_GET['id'];
$database="my_fondostudnomentano";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Impossibile selezionare il database");
$query ="SELECT * FROM mercatino_utenti WHERE id = '$id'";
$risultati=mysql_query($query);
$nome=mysql_result($risultati,$i,"nome");
$conf=mysql_result($risultati,$i,"conf");
$pronta=mysql_result($risultati,$i,"pronta");
echo "Lista libri prenotati da ";
echo $nome;
if ($conf == '1')
{echo " (PRENOTAZIONE CONFERMATA)";}
else if ($pronta == '1')
{echo " (PRENOTAZIONE CONFERMATA E PREPARATA)";}
else if ($pronta == '2')
{echo " (PRENOTAZIONE EVASA)";}
$query2 ="SELECT * FROM mercatino WHERE np = '$id'";
$risultati2=mysql_query($query2);
$num=mysql_numrows($risultati2);
mysql_close();
?>
<center>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Materia</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Titolo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Classe</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prezzo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Stato</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Proprietrio</font></th>
 </tr>
 
 <?php
     $i=0;
     while ($i < $num) {
     $idd=mysql_result($risultati2,$i,"id");
         $materia=mysql_result($risultati2,$i,"materia");
         $titolo=mysql_result($risultati2,$i,"titolo");
         $classe=mysql_result($risultati2,$i,"classe");
         $prezzo=mysql_result($risultati2,$i,"prezzo");
         $stato=mysql_result($risultati2,$i,"stato");
         $proprietario=mysql_result($risultati2,$i,"proprietario");
         $recapito=mysql_result($risultati2,$i,"recapito")
        
 ?>
  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $materia;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $titolo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $classe;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $prezzo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $stato;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $proprietario;?></td>
     <td><a href="modifica.php?act=venduto&id=<?php echo $idd; ?>&ss=<?php echo $prezzo -1 ?>"><img src="v.jpeg"></a></td>
  <td><a href="elimina_p.php?id=<?php echo $idd;?>">ELIMINA</a></td>
  </tr>
 <?php 
 $i++; 
 } 
 ?> 
 </table>
 </center>
 
 <a href="p_pronta.php?id=<?php echo $id;?>">Clicca qui per segnalare la prenotazione come preparata</a><br>
 <a href="p_evasa.php?id=<?php echo $id;?>">Clicca qui per segnalare la prenotazione come CHIUSA</a>

