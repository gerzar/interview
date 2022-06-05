<?php
//php version 7.3

/*
 *
 *
1. Refactor The Code
Your task is to refactor below code.
Hint: OOP is a plus.
$vehicleTypes = ['sport-car', 'truck', 'bike', 'boat'];
$vehiclesSpeed = [150, 60, 100, 50]; // vehicles speed in km/h
$distance = 350; // destination distance in km
print("Duration of each vehicle to reach destination\n");
for ($i=0;$i< count($vehicleTypes) ; $i++) {
// The boat needs extra 15 min to get ready, so we add + 0.25H
if ($vehicleTypes[$i] == 'boat') {
print($vehicleTypes[$i] . ": ". ($distance/$vehiclesSpeed[$i]) + 0.25);
} else {
print($vehicleTypes[$i] . ": ". $distance/$vehiclesSpeed[$i]);
}
}
Duration of each vehicle to reach destination

sport-car: 2.3333333333333
truck: 5.8333333333333
bike: 3.5
boat: 7.25

 *
 */




include 'Compilation.php';


$compilation = new Compilation();

echo "Duration of each vehicle to reach destination <br>";
echo $compilation->show();

