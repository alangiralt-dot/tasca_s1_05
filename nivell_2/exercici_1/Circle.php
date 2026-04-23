<?php
declare(strict_types=1);
class Circle implements PlaneMesuration {
    public function __construct(
        private float $radius
    ){
        Check::greaterThanZero($this->radius);
    }
    public function calculateArea(): float {
        return pi() * $this->radius ** 2;
    }
}