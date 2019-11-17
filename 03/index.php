<?php

$greeting = 'Hello';
$name = 'Tanya';

echo 'Hello, ' . $name . '!'; //single quotes
echo "</br>";

echo $greeting . ', ' . $name . '!'; //single quotes
echo "</br>";

echo "Hello, $name!"; //double quotes
echo "</br>";

echo "Hello, {$name}!"; //double quotes, with braces
echo "</br>";

echo "$greeting, $name!"; //double quotes
echo "</br>";

echo "{$greeting}, {$name}!"; //double quotes, with braces