<?php

$points = 620; 
$minPoints = 500;

echo "Player's total score is: $points <br>";

if ($points > $minPoints) {
    echo "Do players get additional rewards? YES";
} else {
    echo "Do players get additional rewards? NO";
}

?>