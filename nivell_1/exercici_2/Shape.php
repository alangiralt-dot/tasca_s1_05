<?php
declare(strict_types=1);
abstract class Shape {
    // Constructor
    public function __construct(
        private float $base,
        private float $height) {
        if ($this->base <= 0) throw new InvalidArgumentException('$base is less or equal to 0');
        if ($this->height <= 0) throw new InvalidArgumentException('$height is less or equal to 0');
    }
    // Getters
    public function getBase(): float {
        return $this->base;
    }
    public function getHeight(): float {
        return $this->height;
    }
    // Setters
    public function setBase(float $base): void {
        if ($base <= 0) throw new InvalidArgumentException('$base is less or equal to 0');
        $this->base = $base;
    }
    public function setHeight(float $height): void {
        if ($height <= 0) throw new InvalidArgumentException('$height is less or equal to 0');
        $this->height = $height;
    }
    //Methods
    public abstract function calculateArea(): float;
}