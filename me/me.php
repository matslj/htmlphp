<?php
include("incl/config.php"); 
$title = "Min Me-sida om mig själv";
// Används för att, via CSS, markera i menyraden vilken sida som är aktiv.
// Se header.php för mer info.
$pageId = "me";

// Define style thats specific for this page
$pageStyle = '
figure { 
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 border-radius: 10px;

 border-color:#5C0A0A;

 -moz-box-shadow: 10px 10px 5px #8A0F0F;
 -webkit-box-shadow: 10px 10px 5px #8A0F0F;
 box-shadow: 10px 10px 5px #8A0F0F;
}
';
?>

<?php include ('incl/header.php'); ?>
<div id="content">
    <article style="width:98%"> <!-- widthbegränsningen behövs för att inte skuggan på bilden ska kapas -->
        <h1>Om mig själv - för kursen htmlphp</h1>
        <figure class="right top">
            <img src="img/me.jpg" alt="Bild på Mats">
            <figcaption>
                <p>Bild: &iexcl;Hola amigos!</p>
            </figcaption>
        </figure>
        <p>
            Jag heter Mats och bor och jobbar heltid (med systemutveckling - Java) i Lund. Jag har en magisterexamen från BTH i programvaruteknik.
            Jag har läst några av de andra kurserna i kursklustret. Jag märker nu att jag har börjat
            varje mening hittills med 'jag'. Jag gillar det. Jag känner att det understryker
            att den här sidan handlar om mig.
        </p>
        <p>
            Jag har en del fritidsintressen; bland annat är jag med i två olika spelföreningar, tittar mycket på tv
            och längtar efter att få läsa böcker. Jag är även intresserad av rymden och har gått
            ett par kurser, nu på senare tid, vid Lunds Universitet. Jag antar att man skulle kunna sammanfatta mig som varandes en nörd.
        </p>
        <?php include ('incl/byline.php'); ?>
    </article>
</div>
<?php include ('incl/footer.php'); ?>