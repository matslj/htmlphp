<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="style/stylesheet.css">
        <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
        <link rel="shortcut icon" href="img/favicon_glider.ico">
        
        <!-- Each page can set $pageStyle to create additional style -->
        <?php if(isset($pageStyle)) : ?>
        <style type="text/css">
        <?php echo $pageStyle; ?>
        </style>
        <?php endif; ?>
        
        <!-- om webbläsaren är under internet explorer 9 så fixar vi till html5-element -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body<?php if(isset($pageId)) echo " id='$pageId' "; // Används för sidspecifik-CSS-styling av menyn ?>>
        <!-- Header -->
        <!-- Above header -->
        <header id="above">
            <!-- Relateted links -->
            <nav class="related">
                <a href="../../kmom01/me/me.php">kmom01</a>
                <a href="../../kmom02/me/me.php">kmom02 </a>|
                <a href="http://github.com/matslj/htmlphp"> På github</a>
            </nav>
        </header>
        <!-- Header with logo and main navigation -->
        <header id="top">
            <a href="me.php"><img src="img/logo.png" alt="htmlphp logo" width=300 height=70></a>
            <!-- Navigeringsmeny -->
            <nav class="navmenu">
                <a id="me-" href="me.php">Me</a>
                <a id="report-" href="report.php">Redovisning</a>
                <a id="links-" href="usefulLinks.php">Länkar</a>
                <a id="source-" href="viewsource.php">Källkod</a>
            </nav>
        </header>