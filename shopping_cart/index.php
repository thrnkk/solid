<?php

require __DIR__ . '/vendor/autoload.php';

use App\ShoppingCart;

$cart1 = new ShoppingCart();

print_r($cart1->showItems());
echo "Valor {$cart1->showTotal()}";

$cart1->addItem('Bicicleta', 760.10);
$cart1->addItem('Geladeira', 1950.10);
$cart1->addItem('Tapete', 350.10);

echo "<br>";
print_r($cart1->showItems());
echo "Valor {$cart1->showTotal()}";