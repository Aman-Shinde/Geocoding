<?php

require "Geocoding.php";

use basic1\Geocoding;

$geo = new Geocoding("<your google api key>");

$address = $geo->getAddress("<latitude>","<longitude>");

var_dump($address); 


$lat = $geo->getCoordinates("<Address>");

$i = 0;
foreach($lat as $value)
{
    ${'something'.$i} = $value;
    $i++;
}

echo "</br>";
echo "latitude->";
echo $something0;
echo "</br>";
echo "longitude->";
echo $something1; 

?>