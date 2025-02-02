<footer>

<div>
<p>
<?php 
$tyden = array(1=>"pondělí","úterý","středa","čtvrtek","pátek","sobota","neděle");
$mesic = [1=> "leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"];
echo "Dnes je ".$tyden[date('N')].' '.date('j').'/'.$mesic[date('n')].'/'.date('Y');
?>
</p>
</div>
<div>
<p>Čas poslední návštěvy: <?php echo date("H") . " hodin " . date("i") . " minut " . date("s") . " sekund"; ?>.</p>
</div>
<!--zdroje-->
<div>
<p>Zdroje: <a target="_blank" href="https://en.wikipedia.org/wiki/Thailand">Wikipedie</a></p>
</div>
<div>
<p>&copy; Kárský Filip</p>
</div>
</footer>