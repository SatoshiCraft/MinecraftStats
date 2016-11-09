<?php

/**
 * General configuration.
 */
require_once("util.php");

$mcstatsVersion = "1.00";

//Time zone
date_default_timezone_set('America/Sao_Paulo');
$timezone = 'BRST';

//Data structure
$dataDir = "/var/www/html/stats/data";
$rawDataDir = "/var/www/html/stats/raw";

$playerCacheFile = "$dataDir/players.txt";

$hofFile = "$dataDir/hof.txt";
$awardsFile = "$dataDir/awards.txt";
$lastUpdateFile = "$dataDir/lastUpdate";

$statDataDir = "$dataDir/stats";
$playerDataDir = "$dataDir/players";

//Award output - %A% = award name, %W% = Winner, %D% = Award description, %S% = Score
$awardOutputFile = "$dataDir/awardsOutput.txt";
$awardOutputFormat = "%A%;%W%;%D%;%S%\n";

//General Settings
$title = "SatoshiCraft";
$inactiveTime = 432000; //seven days

//Paging
$itemsPerPage = 50;

//Hall of Fame score settings
$goldMedalScore   = 3;
$silverMedalScore = 2;
$bronzeMedalScore = 1;

//Icons
$awardIconDir = "img/icons";
$defaultIcon = "minecraft-wiki/64px-No_image.svg.png";

//Skins
$defaultSkins = ["img/skins/steve.png", "img/skins/alex.png"];

//Load Stats configuration
require("config-stats.php");

//Load player data
if(is_file($playerCacheFile)) {
    $players = unserialize(file_get_contents($playerCacheFile));
} else {
    $players = [];
}
?>
