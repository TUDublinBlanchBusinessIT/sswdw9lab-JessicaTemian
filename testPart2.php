<?php

include("Team.php");

$myTeam = new Team("Tigers");


$myTeam->finalScore(2, 1); 
$myTeam->finalScore(2, 2); 
$myTeam->finalScore(2, 3); 


echo "Goal Average: " . $myTeam->getGoalAverage() . "\n"; 

?>
