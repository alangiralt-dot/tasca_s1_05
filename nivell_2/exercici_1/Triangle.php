<?php
declare(strict_types=1);
class Triangle implements PlaneMesuration {
    public function __construct(
        private float $a,
        private float $b,
        private float $c
    ){
        Check::greaterThanZero($this->a);
        Check::greaterThanZero($this->b);
        Check::greaterThanZero($this->c);
        Check::triangleSides($this->a, $this->b, $this->c);
    }
    public function calculateArea(): float {
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt(
            $s *
            ($s - $this->a) *
            ($s - $this->b) *
            ($s - $this->c)
        );
    }
}