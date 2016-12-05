<style type="text/css">
.highlight {
  background: yellow; 
  font-weight: bold;
}
</style>
<script> 
function apri(url) { 
    newin = window.open(url,'titolo','scrollbars=no,resizable=no, width=800,height=640,status=no,location=no,toolbar=no');
} 
</script>
<body bgcolor= #0099FF>
<?php
$idp=$_GET['id'];
echo "Login eseguito correttamente. Clicca qui per vedere lo "; ?>
<a href="javascript:;"
    onClick="window.open('statop.php?id= <?php echo $idp; ?>;', 'titolo', 'width=400, height=200, resizable, status, scrollbars=1, location');">
Stato delle Prenotazioni</a>



<br>Ti ricordiamo che per rendere valida una prenotazione, dopo aver scelto tutti i libri che desideri, devi confermarla accedendo allo Stato Prenotazioni



<?php
 $database="my_fondostudnomentano";
 
 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query="SELECT * FROM mercatino where stato='Disponibile'";
 $risultati=mysql_query($query);
 
 $num=mysql_numrows($risultati);
 
 mysql_close();
 ?>

<center><BR>Ricerca il titolo di un libro, una materia, una classe o un codice ISBN!: (scorri la pagina per vedere i risultati EVIDENZIATI!)<br>
<form action="#" method="get" id="search">
<div>
    <input type="text" name="q" id="q" />
    <input type="submit" name="highlight" id="highlight" value="Evidenzia" />
    <input type="reset" name="reset" id="reset" value="Resetta" />
</div>
</form></center>


<div id="content">
<center><table border="1" cellspacing="2" cellpadding="2">
 <tr>
 <th><font face="Arial, Helvetica, sans-serif">Materia</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Titolo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Classe</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Prezzo</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Proprietario</font></th>
 <th><font face="Arial, Helvetica, sans-serif">Condizioni</font></th>
 <th><font face="Arial, Helvetica, sans-serif">ISBN</font></th>
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
         $proprietario=mysql_result($risultati,$i,"proprietario");
         $condizioni=mysql_result($risultati,$i,"condizioni");
         $isbn=mysql_result($risultati,$i,"isbn");
        
 ?>
 
<center> 

  <tr>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $materia;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php
     echo "<a href=  javascript:apri('prenota.php?id=";
     echo $id;
     echo"&idp=";
     echo $idp;
     echo "');>";
     echo $titolo;
     echo "</a>";
     ?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><center><?php echo $classe;?></center></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $prezzo;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $proprietario;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $condizioni;?></td>
     <td><font face="Arial, Helvetica, sans-serif"></font><?php echo $isbn;?></td>
  </tr></center>
 <?php 
 $i++; 
 } 
 ?> 
 </table>

 </center>
 
 </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">function highlight(){$('#search').submit(function(event){var $query=$('#search #q').val();var re=new RegExp($query,'gi');var targetHtml=$('#content').html();if(re.test(targetHtml)){var matches=targetHtml.match(re);var no=(matches.length==1)?'corrispondenza':'corrispondenze';var finds=(matches.length==1)?'trovata':'trovate';$('<p/>').text(matches.length+' '+no+' '+finds+'.').appendTo($(this));$('#content').html(targetHtml.replace(re,'<span class="highlight">'+matches[0]+'</span>'));}else{$('<p/>').text('Termine non trovato.').appendTo($(this));}
event.preventDefault();});}
$('#search').bind('reset',function(){$('p','#search').remove();$('span.highlight','#content').each(function(){$(this).removeClass('highlight');});});$(document).ready(function(){highlight();});</script>

