<?php

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

var_dump($data); echo "<br>";

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

echo $data->getTimestamp(); echo "<br>"; // 1363785615

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

echo $data->format("d/m/Y"); echo "<br>"; // 20/03/2013

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

echo $data->format("d/m H:i:s"); echo "<br>"; // 20/03 10:20:15

$data = new DateTime();
$data->modify("+2 day");

echo $data->format("d/m/Y"); echo "<br>"; // A data daqui 2 dias.

$data = new DateTime();
$data->setDate(2013, 03, 20);
$data->setTime(10, 20, 15);

$data->modify("-2 days");

echo $data->format("d/m/Y"); echo "<br>"; // 18/03/2013