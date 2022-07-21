<?php
require_once __DIR__ . '/vendor/autoload.php';
use Location\Coordinate;
use Location\Distance\Vincenty;

CONST LATITUDE_DISTANATION = 55.662882;
CONST LONGITUDE_DISTANATION = 37.485601;


if($_GET['latitude']){
 
    $latitude = (float) $_GET['latitude'];
    $long = (float) $_GET['long'];

    $coordinate1 = new Coordinate(LATITUDE_DISTANATION, LONGITUDE_DISTANATION);
    $coordinate2 = new Coordinate($latitude, $long); 
    $calculator = new Vincenty();

    $data = "Расстояние между: г. Москва, Проспект Вернадского, дом 105 и  " . $_GET['address']  . " составит " . $calculator->getDistance($coordinate1, $coordinate2) . " метров";
    header("Location: index.php?data=".$data);

} else
{
    echo "<h2>Получены неправильные данные</h2>";
}



?>