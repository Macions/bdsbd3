<?php

$imie = $_GET["imie"];
$ilosc_dni = $_GET["ilosc_dni_obiadowych"];

$koszt_obiadu = 3.50;
$dzisiaj = date("Y-m-d");

echo "Dzisiejsza data to: <h3>" . $dzisiaj . "</h3><br>";
echo $imie . ". W tym tygodniu wydasz: " . ($koszt_obiadu * $ilosc_dni) . " zł na obiad<br>";
