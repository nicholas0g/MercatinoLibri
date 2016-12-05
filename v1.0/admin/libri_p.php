<br>
<center>
<?php

 $database="my_fondostudnomentano";

 
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query ="SELECT * FROM mercatino WHERE stato = 'Prenotato'";
 $risultati=mysql_query($query);
 
 $num=mysql_numrows($risultati);
 


 ?>
<center><font face="Arial, Helvetica, sans-serif">Lista Completa</font></center>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Materia</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Titolo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Classe</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prezzo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Proprietario</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Telefono</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prenotato da</font></th>
 </tr>
 
 <?php
     $i=0;
     while ($i < $num) {
         $materia=mysql_result($risultati,$i,"materia");
         $titolo=mysql_result($risultati,$i,"titolo");
         $classe=mysql_result($risultati,$i,"classe");
         $prezzo=mysql_result($risultati,$i,"prezzo");
         $stato=mysql_result($risultati,$i,"stato");
         $proprietario=mysql_result($risultati,$i,"proprietario");
         $recapito=mysql_result($risultati,$i,"recapito");
         $idp=mysql_result($risultati,$i,"np");

         
 ?>
 
  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $materia;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $titolo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $classe;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $prezzo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $proprietario;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $recapito;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $idp;?></td>
  </tr>
 <?php 
 $i++; 
 } 
 ?> 
 </table>
 </center>