<?php
$tims = ["umam", "rissa", "asrul", "bambang"];
array_shift($tims);
foreach ($tims as $person) {
    echo $person . "</br>";
}