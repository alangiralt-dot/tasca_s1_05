<?php
declare(strict_types=1);
class Triangle extends Shape {
    public function calculateArea(): float {
        return $this->getBase() * $this->getHeight() / 2;
    }
}