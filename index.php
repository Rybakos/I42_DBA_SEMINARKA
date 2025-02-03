<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="./img/flag.png">

    <?php
    include "header.php";
    ?>
    <main>
    <?php

    if(isset($_GET["strana"])){
    $strana=$_GET["strana"];
    echo"<title>$stranky[$strana]</title>";
    include "$strana.php";
     }
     else{
        include "uvod.php";
     } 

    ?>

</main>

    <?php
    include "footer.php"
    ?>
</body>
</html> 