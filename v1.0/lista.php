<html>
<head>
<title>Risultti completi libri</title>
</head>
<body bgcolor= #0099FF>
<br>
<center>
<?php
 $database="my_fondostudnomentano";
 
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query="SELECT * FROM mercatino";
 $risultati=mysql_query($query);
 
 $num=mysql_numrows($risultati);
 
 mysql_close();
 ?>
<center><p><font face="Arial, Helvetica, sans-serif">Lista Completa Dei Libri:</font></p></center>
<table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Materia</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Titolo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Classe</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prezzo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Stato</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Proprietario</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Condizioni</font></th>
 <th><font face="Arial, Helvetica, sans-serif">ISBN</font></th>
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
         $condizioni=mysql_result($risultati,$i,"condizioni");
         $isbn=mysql_result($risultati,$i,"isbn");
        
 ?>
 
  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $materia;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $titolo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><center><?php echo $classe;?></center></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $prezzo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $stato;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $proprietario;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $condizioni;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $isbn;?></td>
  </tr>
 <?php 
 $i++; 
 } 
 ?> 
 </table>
 </center>


</body>
</html>