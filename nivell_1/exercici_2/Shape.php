<?php
declare(strict_types=1);
abstract class Shape {
    // Constructor
    function __construct(
        private float $width,
        private float $height) {
        if ($this->width <= 0) throw new InvalidArgumentException('$width is less or equal to 0');
        if ($this->height <= 0) throw new InvalidArgumentException('$height is less or equal to 0');
    }
    // Getters
    public function getWidth(): float {
        return $this->width;
    }
    public function getHeight(): float {
        return $this->height;
    }
    // Setters
    public function setWidth(float $width): void {
        if ($width <= 0) throw new InvalidArgumentException('$width is less or equal to 0');
        $this->width = $width;
    }
    public function setHeight(float $height): void {
        if ($height <= 0) throw new InvalidArgumentException('$height is less or equal to 0');
        $this->height = $height;
    }
    //Methods
    public abstract function calculateArea(): float;
}