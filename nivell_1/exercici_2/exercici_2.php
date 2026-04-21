<?php
declare(strict_types=1);
require_once('Shape.php');
require_once('Rectangle.php');
require_once('Triangle.php');
$shapes = [new Rectangle(7.1, 3.5), new Triangle(7.1, 3.5), 3, 'abc'];
foreach ($shapes as $s) {
    if (!is_object($s) || !$s instanceof Shape) continue;
    echo '--- ' . get_class($s) . ' ---' . PHP_EOL;
    printf("%-10s%10.2f\n", 'width:', $s->getWidth());
    printf("%-10s%10.2f\n", 'height:', $s->getHeight());
    printf("%-10s%10.2f\n", 'area:', $s->calculateArea());
}