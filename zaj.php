<div class="zaj">
    <div class="zajimavost">
        <h2>🐘 Thajsko a sloni</h2>
        <p>Sloni jsou považováni za posvátná zvířata a mají velký význam v thajské kultuře.</p>
    </div>

    <div class="zajimavost">
        <h2>🍜 Pouliční jídlo</h2>
        <p>Thajsko je rájem pouličního jídla. Vyzkoušej Pad Thai, Tom Yum nebo Mango Sticky Rice!</p>
    </div>

    <div class="zajimavost">
        <h2>🏛️ Nejdelší název města</h2>
        <p>Bangkok má oficiálně nejdelší název města na světě!</p>
    </div>

    <div class="zajimavost">
        <h2>🔗 Kultura Thajska</h2>
        <p>Chceš se dozvědět více o thajské kultuře? 
            <a href="
            <?php 
                $strana = $_GET;
                $strana['strana'] = 'kul'; // Přepíše pouze strana=kul
                echo 'index.php?' . http_build_query($strana); 
            ?>
            ">Klikni sem!</a>
        </p>
    </div>
</div>    