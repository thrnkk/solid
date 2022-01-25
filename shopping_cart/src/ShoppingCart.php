<?php

namespace App;

class ShoppingCart {
    
    private $items;
    private $status;
    private $totalValue;

    public function __construct() {

        $this->items = [];
        $this->status = 'open';
        $this->totalValue = 0;

    }

    public function showItems() {
        return $this->items;
    }

    public function addItem(string $name, float $value) {

        array_push($this->items, ['item' => $name, 'value' => $value]);
        $this->totalValue += $value;

        return true;

    }

    public function showTotal() {
        return $this->totalValue;
    }

    public function showStatus() {
        return $this->status;
    }

    public function confirmOrder() {

        if ($this->validateCart()) {
            $this->status = 'confirmed';
            $this->sendEmail();

            return true;
        }

        return false;
        
    }

    public function sendConfirmationEmail() {
        echo 'email sended';
    }

    private function validateCart() {
        return !!count($this->items);
    }

}