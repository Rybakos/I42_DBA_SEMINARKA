<header>
<h1 class="nadpis">
                    <?php
                $stranky=["uvod"=>"Thailand - Země ladyboyema obývaná","kul"=>"Kultura","his"=>"Historie","ek"=>"Ekonomika","zaj"=>"Zajímavosti", "kon"=>"Kontaktujte nás"];
                if(isset($_GET["strana"])){
                    $strana= $_GET["strana"];
                    echo $stranky[$strana];
                }
                else{
                    echo"Thailand - Země ladyboyema obývaná";
                }
                ?>
                </h1>
        <nav>
            <ul>


<?php
$stranky=["uvod"=>"Úvod","kul"=>"Kultura","his"=>"Historie","ek"=>"Ekonomika","zaj"=>"Zajímavosti", "kon"=>"Kontaktujte nás"];
foreach($stranky as $key=> $value){

echo"<li><a href='index.php?strana=$key'>$value</a></li>";
}

?>


            </ul>
        </nav>
    </header>