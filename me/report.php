<?php include("incl/config.php"); ?>

<?php
$title = "Mina redovisningar av kursmomenten";
?>

<?php
// Används för att, via CSS, markera i menyraden vilken sida som är aktiv.
// Se header.php för mer info.
$pageId = "report";
?>

<?php include ('incl/header.php'); ?>
<div id="content">
        <header class="toc">
            <h1>Redovisning av kursmomenten</h1>
            <h3>Table of contents:</h3>
            <nav>
                <ul>
                <li><a href="#kursmoment1">Kursmoment 1</a></li>
                <li><a href="#kursmoment2">Kursmoment 2</a></li>
                </ul>
            </nav>
        </header>

        <h1>Redovisning av kursmomenten</h1>
        
        <section>
            
            <h2 id="kursmoment1">Kmom01: Kom igång med HTML, CSS och PHP</h2>
            <a href="#"><i>(tillbaka till början)</i></a><br /><br />
            <a href="../../kmom01/me/me.php">Till kmom01</a>
            <p>
                Eftersom jag redan har en del php med mig från några av de övriga kurserna
                i kursklustret, så innebär inte php-delen någon större utmaning, och än så
                länge så är html och css-kodningen på en tämligen grundläggande nivå. Mitt
                CSS-kunnande är dock ganska 'hjälpligt' och jag ser fram emot att få mer
                struktur i mitt CSS-kunnande.
            </p>
            <p>
                Men faktiskt så lärde jag mig även en ny grej inom PHP; att man inte behöver
                avsluta <pre>&lt;?php med en ?&gt;</pre>.
            </p>
            <p>
                För tillfället arbetar jag i Windows XP och som IDE använder jag mig av
                Netbeans med WAMP som driftmiljö. Webbläsaren är Firefox. Ftp-klienten är
                filezilla och jag kör putty för att logga in på mitt skolkonto.
            </p>
            <p>
                Att gå en kurs är en bra motivator till att ta sig igenom teknisk dokumentation.
                T.ex när det gäller att gå på djupet i CSS-hanteringen. Och sen är det motiverande
                att jag har direkt användning för det i mitt jobb.
            </p>
        </section>
        <hr />
        <section>
            <h2 id="kursmoment2">Kmom02: HTML-element och CSS-konstruktioner</h2>
            <a href="#"><i>(tillbaka till början)</i></a><br /><br />
            <a href="../../kmom02/me/me.php">Till kmom02</a>
            <p>
                Det var mycket att läsa, men intressant. Övningsmomenten innebar inte några
                större problem. Jag lade särskild fokus på clearfixes
                då jag ibland har tyckt att floats har uppträtt lite random. Bra att få lite
                bättre koll på detta.
            </p>
            <p>
                Jag la inte ner så mycket tid på att personligifiera min me-sida då jag ser
                ett värde i att, för kommande övningars skull, ha en sida som hyfsat
                överensstämmer med Mos. Det seriösa stylandet får antagligen vänta till projektuppgiften.
            </p>
            <p>
                Jag har hållt på en hel del med HTML, men inte så mycket med CSS. På mitt förra
                jobb använde vi färdiga, företagsspecifika, stilmallar, som man som utvecklare aldrig ändrade i.
            </p>
            <p>
                Guiderna html20 och css20 är ett bra komplement till boken då de särskilt uppmärksammar
                sådant man behöver veta för att förstå kursmomentet. Jag tycker att de känns kompletta
                för sitt syfte.
            </p>
            <p>
                Jag gillar strukturen på webbplatsen.
            </p>
            <p>
                Jag har ambitiöst nog även lagt upp projektet på <a href="http://github.com/matslj/htmlphp">GitHub</a>.
            </p>
            <h3>Till synes slumpvis utvalda svar (på uppgiftsfrågor)</h3>
            <ul>
                <li>display: block; är rekommenderad default style för div och article.</li>
                <li>De CSS3-konstruktioner jag valde att använda mig av är border radius och shadow (på menyraden).</li>
            </ul>
        </section>
</div>
<?php include ('incl/footer.php'); ?>