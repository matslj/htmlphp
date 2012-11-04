<?php
error_reporting(-1);

// start a named session
session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

// time page generation, display in footer. comment out to disable timing.
$pageTimeGeneration = microtime(true); 

// include common functions 
include_once(dirname(__FILE__) . "/../src/common.php");

// include functions for login & logout
include_once(dirname(__FILE__) . "/../src/login.php");

// account and password that can login
$userAccount = "doe";
$userPassword = userPassword("doe");

/* Tips!
 * 
 * PHP sluttag ?> behövs inte alltid anges. Som du kan se i filen config.php så
 * använder jag inte sluttaggen. Detta gäller när man enbart har PHP-kod i en
 * fil och det stämmer för config-filen. Om man kan undvika att ange sluttaggen
 * så ska man göra det. När du mixar HTML-kod och PHP-kod så måste du alltid ange
 * sluttaggen. I denna kurs mixar vi nästa uteslutande HTML och PHP så oftast
 * behöver du ange sluttaggen.
 */