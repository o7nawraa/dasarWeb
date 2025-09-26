<?php
    $seatsTotal = 45;
    $occupiedSeats = 28;

    $emptySeats = $seatsTotal - $occupiedSeats;
    $percentageEmptySeats = ($emptySeats / $seatsTotal) * 100;

    echo "The percentage of seats that are still empty is  $percentageEmptySeats";
?>