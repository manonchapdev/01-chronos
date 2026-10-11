<?php

$duration = 185;
$hours = intdiv($duration,60);
$minutes = $duration %60;

echo "chronos : $duration minutes" . PHP_EOL;
echo "$hours heures et $minutes minutes" . PHP_EOL;