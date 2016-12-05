<html>
<head>
<title>Risultati selezionati</title>
</head>

<br>
<center>
<?php

 $database="my_fondostudnomentano";
 $nome1=$_POST['nome'];

 
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query ="SELECT * FROM mercatino WHERE proprietario LIKE '%$nome1%'";
 $risultati=mysql_query($query);
 
 $num=mysql_numrows($risultati);
 

 ?>
<center>
<?php
echo "Libri di ";
echo $nome1;
?></center><br>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Materia</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Titolo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Classe</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prezzo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Stato</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Recapito</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Soldi da dare</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Consegnati</font></th>
 </tr>
 
 <?php
     $i=0;
     while ($i < $num) {
     $id=mysql_result($risultati,$i,"id");
         $materia=mysql_result($risultati,$i,"materia");
         $titolo=mysql_result($risultati,$i,"titolo");
         $classe=mysql_result($risultati,$i,"classe");
         $prezzo=mysql_result($risultati,$i,"prezzo");
         $stato=mysql_result($risultati,$i,"stato");
         $recapito=mysql_result($risultati,$i,"recapito");
         $dare=mysql_result($risultati,$i,"dare");
         $dati=mysql_result($risultati,$i,"dati");
        
 ?>
 
  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $materia;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $titolo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $classe;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $prezzo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $stato;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $recapito;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $dare;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $dati;?></td>
     <td><a href="modifica.php?act=venduto&id=<?php echo $id; ?>&ss=<?php echo $prezzo -1 ?>"><img src="v.jpeg"></a></td>
     <td><a href="modifica.php?act=consegnati&id=<?php echo $id; ?>;"><img src="d.jpg"></a></td>
     <td><a href="modifica.php?act=ridati&id=<?php echo $id; ?>;">STORNA</a></td>
  </tr>
 <?php 
 $i++; 
 } 
 ?> 
 </table>
 </center>


</body>
</html>