<?php 
include("incl/config.php");

$pageTitle = "Visa källkod";
$pageId = "source";

// Include code from source.php to display sourcecode-viewer
$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
$sourceNoIntro=true;
include("src/source.php");
$pageStyle=$sourceStyle;
?>


<?php include("incl/header.php"); ?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="content">
    <h1>Visa källkod</h1>
<?php echo "$sourceBody"; ?>
</div>

<?php include("incl/footer.php"); ?>