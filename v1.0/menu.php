<html>
<head>
<meta charset="utf-8">
<title>Mercatino libri nomentano</title>
</head>

<body bgcolor= #0099FF>
<script> 
function apri(url) { 
    newin = window.open(url,'Admin','scrollbars=no,resizable=no, width=800,height=640,status=no,location=no,toolbar=no');
} 
</script>
<p><a href="javascript:apri('admin');"><font color="white">Area Amministrazione</font></a></p>

<center>
<img src=logom.png>
<a href= /mercatino/prenotazioni target="_blank"><img src=plogo.png width=”254″ height=”69″ border=”1″ align=”right”></a>
<br>

Campi di ricerca:
<table border=1>
<form   id="form1" name="form1" action="mostra.php" method="post" TARGET = "visualizza">
    <td>
   
        <label for="select">Materia</label>
        <select
        name="materia" id="materia">
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
          </select>
         <label for="select"> Classe:</label>
        <select name="classe" id="classe">
          <option>--</option>
          <option>I</option>
          <option>II</option>
          <option>III</option>
          <option>IV</option>
          <option>V</option>
        </select><br>
        <center>
        <input type="submit" name="submit" id="submit" value="Cerca con questi parametri"  >
        </center>

</form>
</td>
<td>
<form   id="form2" name="form2" action="mostra1.php" method="POST" TARGET = "visualizza">
 <br>
        <label for="number">Cerca per titolo:</label>
        <input name="titolo" type="text" id="titolo"><br><center>
        <input  type="submit" name="submit1" id="submit1" value="Cerca per titolo"></center>
 
  </form>
  </td>
  <td>
<form   id="form2" name="form3" action="mostra2.php" method="POST" TARGET = "visualizza">
 <br>
        <label for="number">Cerca per ISBN:</label>
        <input name="isbn" type="text" id="isbn"><br><center>
        <input  type="submit" name="submit2" id="submit2" value="Cerca per ISBN"></center>
 
  </form>
  </td>
  
</table>
</center>
<center> 
<a href=lista.php target="visualizza"><font color="black">Torna alla visualizzazione della lista completa</font></a></center>
  
  
  
  
</body>
</html>