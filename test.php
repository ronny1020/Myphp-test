<?php
echo date_default_timezone_get(), "<br>";
$d = mktime(13, 30, 0, 9, 10, 2020);
//1970-01-01 00:00:00

$x = getdate();
echo gettype($x), "<br>";
echo $x, "<br>";

echo "<br>";
$x = date('Y-m-d H:i:s');
echo $x, "<br>";
echo gettype($x), "<br>";
echo $x, "<br>";

echo "<br>";
$x = gmdate('Y-m-d H:i:s');
echo $x, "<br>";

echo "<br>";
$x = strtotime(gmdate('Y-m-d H:i:s'));
echo $x, "<br>";
echo gettype($x), "<br>";

echo date('Y-m-d H:i:s'), "<br>";
echo gmdate('Y-m-d H:i:s'), "<br>";
echo getdate('Y-m-d H:i:s'), "<br>";