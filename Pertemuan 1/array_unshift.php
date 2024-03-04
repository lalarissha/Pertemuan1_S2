<?php
$tims = ["umam", "rissa", "asrul", "bambang"];
array_unshift($tims, "deli", "lisa");
foreach ($tims as $person) {
    echo $person . "</br>";
}