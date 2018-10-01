<?php

echo "Normal<br>";
$data = new DateTime("2018-02-12 16:42:33");
echo $data->format("d/m/Y h:i");

echo "<br><br>Now<br>";
$data = new DateTime("now");
echo $data->format("d/m/Y H:i:s");

echo "<br><br>Amanhã<br>";
$data = new DateTime("+1 day");
echo $data->format("d/m/Y");

echo "<br><br>Fuso horário de São Paulo<br>";
date_default_timezone_set("America/Sao_Paulo");
$data = new DateTime("now");
echo $data->format("d/m/Y H:i:s");

echo "<br><br>Fuso horário de Porto Velho<br>";
date_default_timezone_set("America/Porto_Velho");
$data = new DateTime("now");
echo $data->format("d/m/Y H:i:s");

echo "<br><br>Alterando no php.ini para São Paulo<br>";
$data = new DateTime("now");
echo "No Brasil são: " . $data->format("H:i:s") . "<br>";

echo "<br><br>Alterando direto na classe<br>";
$data = new DateTime("now", new DateTimeZone('Australia/Sydney'));
echo "Em Sidney, na Austrália são: " . $data->format("H:i:s") . "<br>";

echo "<br><br><br>";
echo '<img src="../../../../material-de-apoio/manipulacao-data-exemplos.png"><br>';
echo '<a target="_blank" href="http://php.net/manual/pt_BR/timezones.america.php">Referencias de outros fuso horários clicando aqui</a>';