<?php
declare(strict_types=1);
class Triangle extends Shape {
    public function calculateArea(): float {
        return $this->getWidth() * $this->getHeight() / 2;
    }
}