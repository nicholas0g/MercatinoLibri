<?php
echo "IL SISTEMA DI MODIFICA NON FUNZIONA ANCORA!";
echo " NON USARE QUESTA PAGINA PER NESSUN MOTIVO!";
?>

<?php   $id=$_GET['id'];

 $database="my_fondostudnomentano";

 mysql_connect(localhost,$username,$password);
 @mysql_select_db($database) or die("Impossibile selezionare il database");
 $query ="SELECT * FROM mercatino WHERE id = '$id'";
 $risultati=mysql_query($query);
 
 $id=mysql_result($risultati,$i,"id");
 $materia=mysql_result($risultati,$i,"materia");
         $titolo=mysql_result($risultati,$i,"titolo");
         $classe=mysql_result($risultati,$i,"classe");
         $prezzo=mysql_result($risultati,$i,"prezzo");
         $stato=mysql_result($risultati,$i,"stato");
         $recapito=mysql_result($risultati,$i,"recapito");
         $dare=mysql_result($risultati,$i,"dare");
         $dati=mysql_result($risultati,$i,"dati");
         $condizioni=mysql_result($risultati,$i,"condizioni");
         
         ?>
         
<table>
<td>
<form id="form5" name="form5" action="modifica_dati1.php" method="post" TARGET = "visualizza">
   <p>
          <label for="text">ID (non modificare mai!!) </label>
        <input name="titolo" type="text" required id="titolo" value="<?php  echo $id;?>" readonly></p>
          <p>

        <p><label for="select">Materia: </label>
        <select
        name="materia" id="materia" value= "<?php  echo $materia;?>" >
        <option>--</option>
          <option>Italiano</option>
          <option>Latino</option>
          <option>Matematica</option>
          <option>Fisica</option>
         <option>Arte</option>
          <option>Scienze</option>
          
          <option>Geografia</option>
          <option>Storia</option>
          <option>Filosofia</option>
          <option>Religione</option>
          <option>Inglese</option>
          <option>Ed. Fisica</option>
          <option>Dizionario</option>
          </select></p>
          <p>
          <label for="text">Titolo: </label>
        <input name="titolo" type="text" required id="titolo" value="<?php  echo $titolo;?>"></p>
          <p>
         <label for="select"> Classe: </label>
        <select name="classe" id="classe" value=$classe>
          <option>--</option>
          <option>I</option>
          <option>II</option>
          <option>III</option>
          <option>IV</option>
          <option>V</option>
        </select><p>
         <p>
          <label for="number">Prezzo: </label>
        <input name="prezzo" type="text" required id="prezzo" value="<?php  echo $prezzo;?>"></p>
         <p>
          <label for="text">Proprietario: </label>
        <input name="proprietario" type="text" required id="proprietario" value="<?php  echo $proprietario;?>"></p>
         <p>
          <label for="text">Cellulare: </label>
        <input name="recapito" type="text" id="recapito" value="<?php  echo $recapito;?>"></p>
        <p>
          <label for="text">ISBN: </label>
        <input name="isbn" type="text" required id="isbn" value="<?php  echo $isbn;?>"></p>
         <p>
         <label for="select"> Condizioni: </label>
        <select name="condizioni" id="condizioni" value="<?php  echo $condizioni;?>">
          <option>--</option>
          <option>Ottime</option>
          <option>Buone</option>
          <option>Decenti</option>
          <option>Pessime</option>
        </select><p>
        
        
        <center><input type="submit" name="submit" id="submit" value="Conferma Modifiche"  ></center>
        

</form>
</td>
</table>