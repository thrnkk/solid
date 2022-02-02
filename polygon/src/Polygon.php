<?php

namespace App;

class Polygon {

    private $form;

    public function setForm(object $form): void {
        $this->form = $form;
    }

    public function getForm(): object {
        return $this->form;
    }

    public function getArea(): float {
        return $this->getForma()->getHeight() * $this->getForma()->getWidth();
    }

}