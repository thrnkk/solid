<?php

namespace App;

class Rectangle {

    protected $width;
    protected $height;

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setHeight(float $height): void {
        $this->height = $height;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getArea(): float {
        return $this->getHeight() * $this->getWidth();
    }

}