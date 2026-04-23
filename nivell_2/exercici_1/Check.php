<?php
declare(strict_types=1);
class Check {
    private function __construct() {}
    public static function greaterThanZero(float $real): void {
        if ($real <= 0) throw new InvalidArgumentException("$real is not greater than 0");
    }
    public static function triangleSides(float $a, float $b, float $c): void {
        $maxLength = $a;
        if ($b > $maxLength) $maxLength = $b;
        if ($c > $maxLength) $maxLength = $c;
        if ($a + $b + $c - $maxLength <= $maxLength) throw new InvalidArgumentException("You cannot form a triangle with $a, $b and $c");
    }
}