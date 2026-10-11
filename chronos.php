<?php

$duration = 1500; 
//$hours = (int) ($duration / 60);
$hours = intdiv($duration, 60);
$minutes =  $duration % 60;

echo "Chronos : " . $duration . " minutes" . PHP_EOL;
echo $hours . " heures et " . $minutes . " minutes" . PHP_EOL;