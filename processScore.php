<?php

include("Team.php");


$teamName = $_GET['teamName'] ?? '';
$ht1 = $_GET['home1'] ?? 0;
$at1 = $_GET['away1'] ?? 0;
$ht2 = $_GET['home2'] ?? 0;
$at2 = $_GET['away2'] ?? 0;
$ht3 = $_GET['home3'] ?? 0;
$at3 = $_GET['away3'] ?? 0;

if (empty($teamName)) {
    echo "Error: team name is required.";
    exit;
}

$homeTeam = new Team($teamName);

$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Goal Average for {$teamName}: " . $homeTeam->getGoalAverage();

?>


