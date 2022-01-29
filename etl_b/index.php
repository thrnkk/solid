<?php

require __DIR__ . "/vendor/autoload.php";

use App\Reader;

$reader = new Reader();

$reader->setDirectory('C:\Users\thomas\Desktop\solid\etl\arquivos\\');
$reader->setFile('dados.txt');

echo '<pre>';
print_r($reader->readFile());
echo '</pre>';