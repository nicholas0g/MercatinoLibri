<form   id="form1" name="form1" action="inserisci.php" method="post" TARGET = "azione">
   
   Completa la form per aggiungere un nuovo libro<br>
       <center> <label for="select">Materia</label>
        <select
        name="materia" id="materia">
        <option>--</option>
          <option>Italiano</option>
          <option>Latino</option>
          <option>Matematica</option>
          <option>Fisica</option>
          <option>Biologia</option>
          <option>Scienza</option>
          <option>Chimica</option>
          <option>Geografia</option>
          <option>Storia</option>
          <option>Filosofia</option>
          <option>Religione</option>
          <option>Diritto</option>
          <option>Ed. Fisica</option>
          <option>Dizionario</option>
          </select><br>
         <label for="select"> Classe:</label>
        <select name="classe" id="classe">
          <option>--</option>
          <option>I</option>
          <option>II</option>
          <option>III</option>
          <option>IV</option>
          <option>V</option>
        </select><br>
        </center>
        <center>
        <input type="submit" name="submit" id="submit" value="Aggiungi Libro"  >
        </center>

</form>