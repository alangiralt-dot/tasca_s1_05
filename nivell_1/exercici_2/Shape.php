<?php
declare(strict_types=1);
abstract class Shape {
    // Constructor
    function __construct(
        protected float $width,
        protected float $height) {
    }
    // Getters
    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
    //Methods
    public abstract function calculateArea(): float;
}