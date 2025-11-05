<?php

include 'Team.php';


$teamName = $_GET['teamName'];

$home1 = $_GET['home1'];
$away1 = $_GET['away1'];

$home2 = $_GET['home2'];
$away2 = $_GET['away2'];

$home3 = $_GET['home3'];
$away3 = $_GET['away3'];


$homeTeam = new Team($teamName);


$homeTeam->finalScore($home1, $away1);
$homeTeam->finalScore($home2, $away2);
$homeTeam->finalScore($home3, $away3);


echo "<h2>Team: " . htmlspecialchars($teamName) . "</h2>";
echo "<p>Goal average: " . $homeTeam->getGoalAverage() . "</p>";
?>