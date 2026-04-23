<?php
declare(strict_types=1);
class Rectangle implements PlaneMesuration {
    public function __construct(
        private float $base,
        private float $height
    ){
        Check::greaterThanZero($this->base);
        Check::greaterThanZero($this->height);
    }
    public function calculateArea(): float {
        return $this->base * $this->height;
    }
}