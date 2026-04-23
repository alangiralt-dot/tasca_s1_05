<?php
declare(strict_types=1);
require_once('PlaneMesuration.php');
require_once('Check.php');
require_once('Rectangle.php');
require_once('Triangle.php');
require_once('Circle.php');
$shapes = [
    new Rectangle(8.3, 2.7),
    new DateTime(),
    new Triangle(4.3, 1.7, 5.2),
    new Circle(3.5),
    'abc'
];
printf("%-15s%10s\n", 'CLASS', 'AREA');
foreach ($shapes as $s) {
    if (!is_object($s) || !$s instanceof PlaneMesuration) continue;
    printf("%-15s%10.2f\n", get_class($s), $s->calculateArea());
}
var_dump(new Triangle(3, 2, 7));