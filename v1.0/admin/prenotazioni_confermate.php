<br>
Questa lista contiene l'elenco delle prenotazioni confermate
<center>
<?php

 $database="my_fondostudnomentano";

 
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query ="SELECT * FROM mercatino_utenti WHERE conf = 1";
 $risultati=mysql_query($query);
 
 $num=mysql_numrows($risultati);

 ?>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Nome</font></th>
 <th><font face="Arial, Helvetica, sans-serif">E-Mail</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Numero Libri Prenotati</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Confermata</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Preparata</font></th>
 
 <?php
     $i=0;
     while ($i < $num) {
     $id=mysql_result($risultati,$i,"id");
         $nome=mysql_result($risultati,$i,"nome");
         $mail=mysql_result($risultati,$i,"mail");
         $n=mysql_result($risultati,$i,"n");
         $conf=mysql_result($risultati,$i,"conf");
         $pronta=mysql_result($risultati,$i,"pronta");
        
 ?>
 
  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $nome;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $mail;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $n;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $conf;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $pronta;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><a href="prenotazione_personale.php?id=<?php echo $id;?>">VEDI</a></td>
    
  </tr>
 <?php 
 $i++; 
 } 
 ?> 
 </table>
 </center>