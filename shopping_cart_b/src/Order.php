<?php

namespace App;

use App\ShoppingCart;

class Order {

    private $status;
    private $shoppingCart;
    private $totalValue;

    public function __construct() {
        $this->status = 'open';
        $this->shoppingCart = new ShoppingCart();
        $this->totalValue = 0;
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }

    public function confirm() {
        if ($this->shoppingCart->validateCart()) {
            $this->setStatus('confirmed');
            return true;
        }

        return false;
    }

}