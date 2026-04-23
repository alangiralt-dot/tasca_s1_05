<?php
declare(strict_types=1);
class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->getBase() * $this->getHeight(); 
    }
}