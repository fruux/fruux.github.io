<?php

$first = new DateTime('2009-11-02');
$second = new DateTime('2014-05-22');
$third = new DateTime('2015-06-02');

$firstD = $second->getTimeStamp() - $first->getTimeStamp();
$secondD = $third->getTimeStamp() - $second->getTimeStamp();

$releases = [
    '1.0' => $first,
    '2.0' => $second,
    '3.0' => $third,
];

$increaseRate = $firstD / $secondD;

echo "release rate: " . ($secondD / $firstD), "\n";

$version = 4;
$lastD = $secondD;
$lastTimeStamp = $third->getTimeStamp();

while($version < 10) {

    $lastD /= $increaseRate;
    $lastTimeStamp+=round($lastD);

    $releases[$version . '.0'] = new DateTime('@' . $lastTimeStamp);
    $version++;

}

print_r($releases);
