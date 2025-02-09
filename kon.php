<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$jmeno=$_POST["jmeno"];
$prijmeni=$_POST["prijmeni"];
$pohlavi=$_POST["pohlavi"];
$hodnoceni=$_POST["hodnoceni"];
$jine=$_POST["jine"];
echo "<div class='endphp'>";
echo"<h1> Vyhodnocení: </h1>";
echo"<br>";
echo"<br>";

if($pohlavi=="z"){
 echo"Autorka webu: $jmeno $prijmeni";
 echo"<br>";
 echo"<br>";
}
if($pohlavi=="m"){
  echo"Autor webu: $jmeno $prijmeni";
  echo"<br>";
  echo"<br>";
}
if($hodnoceni=="ujde"){
  echo"Tento web ujde.";
}
else{
  echo"Tento web je $hodnoceni.";
}

echo"<br>";
echo"<br>";
echo"Použité technologie:<br>";
if(isset($_POST["HTML"])){
echo"HTML <br>";
}
if(isset($_POST["CSS"])){
  echo"CSS <br>";
  }
if(isset($_POST["PHP"])){
echo"PHP <br>";
}
if(isset($_POST["JavaScript"])){
  echo"JavaScript <br>";
  }
if(isset($_POST["ostatny"])){

  echo"$jine";

}
echo"</div>";"</div>";
}
else{
?>
<div class="end">
<form method="POST">
        <label>Jméno: <input type="text" name="jmeno" required></label><br>
        <label>Příjmení: <input type="text" name="prijmeni" required></label><br>
        <p>Pohlaví:
            <label><input type="radio" name="pohlavi" value="m" required> muž</label>
            <label><input type="radio" name="pohlavi" value="z"> žena</label>
        </p>
        <label>Hodnocení webu:
            <select name="hodnoceni">
                <option value="úžasný">úžasný</option>
                <option value="pěkný">pěkný</option>
                <option value="ujde">ujde</option>
                <option value="strašný">strašný</option>
            </select>
        </label><br>
        <p>Použité technologie:</p>
        <div class="kontext">
        <label><input type="checkbox" name="HTML" value="HTML"> HTML</label>
        <label><input type="checkbox" name="CSS" value="CSS"> CSS</label>
        <label><input type="checkbox" name="PHP" value="PHP"> PHP</label>
        <label><input type="checkbox" name="PHP" value="PHP"> JavaScript</label>
        <label><input type="checkbox" name="PHP" value="PHP"> SQL</label>
        <label><input type="checkbox" name="ostatny" value="ostatny"> Ostatní: </label>
        </div>
        <input type="text" name="jine"><br>
        <button type="submit">Odeslat</button>
    </form>
    </div>
<?php

}
?>