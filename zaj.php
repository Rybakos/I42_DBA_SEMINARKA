<div id="zaj">
    <div class="zajimavost">
        <h2>🐘 Thajsko a sloni</h2>
        <p>Sloni jsou považováni za posvátná zvířata a mají velký význam v thajské kultuře.</p>
        <img src="./img/slonos.jpg" alt="Slon">
    </div>

    <div class="zajimavost">
        <h2>🍜 Pouliční jídlo</h2>
        <p>Thajsko je rájem pouličního jídla. Vyzkoušej Pad Thai, Tom Yum nebo Mango Sticky Rice!</p>
        <img src="./img/streetfoodjpg.jpg" alt="Profík v oboru pouliční jídlo">
    </div>

    <div class="zajimavost">
        <h2>🏛️ Nejdelší název města</h2>
        <p>Bangkok má oficiálně nejdelší název města na světě!</p>
        <img src="./img/bangkoknazev.jpg" alt="Celej název Bangkoku">
    </div>
    <div class="zajimavost">
        <h2>🐅 Thajští tygři</h2>
        <p>Thajsko je domovem thajského tygra, jednoho z nejohroženějších druhů tygra na světě. Tento majestátní predátor je symbolem síly a odvahy v thajské kultuře.</p>
        <img src="./img/tiger.jpg" alt="Tiger typu hodně stylovej">
    </div>
    <div class="zajimavost">
        <h2>🦋 Biodiverzita</h2>
        <p>Thajsko je jedním z nejvíce biodiverzních regionů na světě. Má více než 10 000 rostlinných druhů a 1 000 živočišných druhů, včetně mnoha ohrožených druhů.</p>
        <img src="./img/biodiversita.jpg" alt="Obrázek Biodiversity">
    </div>
    <div class="zajimavost">
        <h2>👩‍🦰 Co je to "Kathoey"?</h2>
        <p>Termín Kathoey v thajštině označuje osoby, které se identifikují jako transgender ženy nebo jako mužské-to-ženské transsexuálky. V angličtině se často používá termín ladyboy. V thajské kultuře jsou kathoey považováni za třetí pohlaví a mají dlouhou historickou a kulturní tradici.</p>
        <img src="./img/ladyboy.jpg" alt="Překvapení v Thailandu">
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