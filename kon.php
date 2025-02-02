<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$jmeno=$_POST["jmeno"];
$prijmeni=$_POST["prijmeni"];
$pohlavi=$_POST["pohlavi"];
$pozadavky=$_POST["zvl"];
$rodcis=$_POST["rodocis"];
$vyber=$_POST["vyber"];

if($pohlavi=="z"){
 echo"<h1>Vyplnila jste tyto informační údaje:</h1>";
 echo"<br>";
 echo"Žadatelka: $jmeno $prijmeni";
}
if($pohlavi=="m"){
  echo"<h1>Vyplnil jste tyto informační údaje:</h1>";
  echo"<br>";
  echo"Žadatel: $jmeno $prijmeni";
}
echo"<br>";
echo"Rodné číslo: $rodcis <br>";
echo"Skupina řidiřského oprávnění:$vyber";
echo"<br>"; 
echo"<br>";
echo"Účel pořízení průkazu: <br>";
if(isset($_POST["doprava"])){
echo"doprava do zaměstnání <br>";
}
if(isset($_POST["prac"])){
  echo"pracovní účely <br>";
  }
if(isset($_POST["prepo"])){
echo"přeprava osob <br>";
}
if(isset($_POST["prepn"])){
  echo"přeprava nákladu <br>";
  }
if(isset($pozadavky)){
  echo"<br> Zvláštní požadavky:<br>";
  echo"$pozadavky";
}    
echo"<br> <br> Děkujeme za vyplnění formuláře.";
}

else{
?>
<h2>Řidičský průkaz - informační formulář</h2>
<form method="post">
<fieldset>
<legend>Údaje o žadateli</legend>
Jméno: <input type="text" size="15" required name="jmeno"><br>
Příjmení: <input type="text" size="15" required name="prijmeni"><br>
Rodné číslo: <input type="text" size="30" name="rodocis" placeholder="Zadej rodné číslo i s lomítkem" maxlength="11" minlength="11" required> <br>
Národnost: <input type="text" size="30" required value="česká" name="NAR">
</fieldset><br><br>
Pohlaví: <br>
žena <input type="radio" checked name="pohlavi" value="z">  
muž <input type="radio" name="pohlavi" value="m">
   <br><br>

Skupiny řidičských oprávnění:<br>
<select name="vyber">
  <option  value="A motocykly">A motocykly</option>
  <option  value="B motorová vozidla do 3500 kg">B motorová vozidla do 3500 kg</option>
  <option selected  value="motorová vozidla nad 3500 kg">C motorová vozidla nad 3500 kg</option>
  <option  value="D motorová vozidla pro dopravu osob">D motorová vozidla pro dopravu osob</option>
  <option  value="T zemědělské a technické traktory">T zemědělské a technické traktory</option>
</select>   
<br><br>
Účel pořízení průkazu:<br>
<input type="checkbox" checked name="doprava"> doprava do zaměstnání <br> 
<input type="checkbox" name="prac">  pracovní účely<br>
<input type="checkbox" name="prepo"> přeprava osob<br>             
<input type="checkbox" name="prepn"> přeprava nákladu<br>
<br><br>

Zvláštní požadavky:<br>
<textarea rows="5" cols="40" name="zvl"></textarea>
<br><br>

<input type="submit" value="Odeslat údaje">

</form>
<?php

}
?>