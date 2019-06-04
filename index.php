<?php
require_once  './src/views/template/head.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- <nav class="follow-nav navbar navbar-expand-md fixed-bottom">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav bg-dark">
            <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#theApp" class="nav-link">De app</a></li>
            <li class="nav-item"><a href="#Company" class="nav-link">Bedrijven</a></li>
            <li class="nav-item"><a href="#aboutUs" class="nav-link">Over ons</a></li>
        </ul>
    </div>
</nav> -->

<section id="home" class="home">
    <article class="container-fluid">
        <h2>Alle ondersteuning die je nodig hebt.</h2>
        <hr>
        <p>Met onze applicatie krijg je een ongelofelijke ervaring op je festival. Support My Day heeft veel functies
            die ervoor zorgen dat jij een onvergetelijke dag hebt.</p>
        <p>Alle informatie die je nodig hebt. Direct op je smartphone.</p>

        <a href="itms-apps://..." class="btn" target="_self">
            <div class="btn-text">Download the app</div>
            <div class="button"></div>
        </a>
    </article>
</section>

<section id="theApp" class="app">
    <div class="row">
        <article class="col">
            <h2>Een gemakkelijke manier om je vrienden te vinden</h2>
            <hr>
            <p>Wie kent het niet. Je loopt op een festival en bent je vrienden kwijt. Met de Friend Finder kan je jouw
                vrienden makkelijk terugvinden.</p>
            <div class="row">
                <i class="icon fas fa-map-marked-alt fa-3x col"></i>
                <i class="icon fas fa-map-marker-alt fa-3x col"></i>
            </div>
        </article>
        <article class="col">
            <h2>Waar je drinken kunt krijgen</h2>
            <hr>
            <p>Wil je wat te drinken of eten halen of even naar de WC? Doe je dit liever niet omdat je favoriete artiest
                zo
                optreedt? Geen probleem! Op onze interactieve kaart kan je door middel van heat maps precies zien welke
                plekken het rustigst zijn. Zo hoef je dus niks te missen!</p>
            <div class="row">
                <i class="icon far fa-clock fa-3x col"></i>
                <i class="icon fas fa-stopwatch fa-3x col"></i>
            </div>
        </article>
        <article class="col">
            <h2>Plan je hele dag, waar en wanneer</h2>
            <hr>
            <p>Met planningsagenda kan je precies zien welke artiest waar optreedt. Ook kan je favorieten selecteren en
                krijg je een melding vóór de show begint. Zo mis je niks en hoef je nooit meer met papieren programma’s
                te
                lopen.</p>
            <div class="row">
                <i class="icon far fa-calendar-alt fa-3x col"></i>
            </div>
        </article>
    </div>
    <a href="src/views/sections/app-info.php" class="btn" target="_self">
        <div class="btn-text">Meer over de app</div>
        <div class="button"></div>
    </a>
</section>

<section class="company" id="Company">
    <article class="">
        <h2>Wat bieden we aan de bedrijven?</h2>
        <hr>
        <p>We kunnen verschillende informatie aan bedrijven verstrekken. Denk aan de hoeveelheid bezoekers die er zijn,
            hoeveel er totaal zijn geweest en drukke plekken op het evenement. Zo heb je altijd controle op jouw
            evenement.</p>

        <aside>
            <h3>Makkelijk te verkopen</h3>
            <p>Een gemakkelijke manier om uw tickets te verkopen, via onze app</p>
        </aside>

        <aside>
            <h3>Je persoonlijke muziek lijst</h3>
            <p>Een exclusieve Spotify afspeellijst gebaseerd op de bezoeker.</p>
        </aside>

        <aside>
            <h3>Menigtecontrole</h3>
            <p>Bekijk je evenement real time. Zo zie je welke plekken het drukst zijn om zo de veiligheid te
                garanderen.</p>
        </aside>

        <aside class="">
            <h3>Een gemeenschap</h3>
            <p>Een gemeenschap, waar foto's en video's gedeeld kunnen worden.</p>
        </aside>
    </article>
</section>

<section class="about" id="aboutUs">
    <article>
        <h2>Wil je alles over ons weten?</h2>
        <hr>
        <div class="row">
            <div class="col">
                <p>Nederland trekt jaarlijks miljoenen festivalgangers. Van deze festivalgangers heeft het grootste
                    gedeelte
                    een smartphone bij zich. Logisch natuurlijk! Met deze apparaten kan je namelijk in een handomdraai
                    informatie opzoeken, belangrijke momenten vastleggen en ben je altijd bereikbaar. Kortom, je hebt de
                    wereld in je broekzak.</p>
                <p>De dag makkelijker maken met diverse informatie die de hele dag binnenkomt. Dit is het mooiste wat er
                    is
                    volgens ons. Het is algemeen bekend dat er inmiddels overal een app voor is. Echter is er volgens
                    ons
                    een probleem. Deze apps zijn namelijk niet volledig waardoor de gebruiker meerdere applicaties moet
                    downloaden en gebruiken. Wij spelen hierop in door een applicatie uit te brengen die de gebruiker
                    vanaf
                    het begin van de dag tot het eind van de dag kan gebruiken.</p>
            </div>
            <div class="col">
                <p>Support My Day is gericht op de term “De wereld in je broekzak”. Wij zijn een jong en dynamisch
                    bedrijf
                    opgestart door vier studenten. Opgericht in juli 2018. Ons doel is om ervoor te zorgen dat de
                    bezoeker
                    optimaal van de dag kan genieten door zoveel mogelijk, op maat gemaakte informatie, aan te
                    bieden.</p>
            </div>
        </div>
    </article>
</section>
<?php require_once  './src/views/template/bottom.php'; ?>
