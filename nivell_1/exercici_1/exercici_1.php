<?php
declare(strict_types=1);
require_once('Animal.php');
require_once('Human.php');
require_once('Cow.php');
class Letter {
    function __construct(public string $character){}
}
$l1 = new Letter('C');
$h1 = new Human('James', 'Homo sapiens');
$c1 = new Cow('Betsy', 'Bos taurus', true);
$c2 = new Cow('Dorothy', 'Bos taurus', true);
$c3 = new Cow('Clarabelle', 'Bos taurus', false);
$animals = [$c1, $l1, $c2, $h1, $c3, 3, 'abc'];
foreach ($animals as $a) {
    echo '--------------------------------' . PHP_EOL;
    if (!is_object($a)) continue;
    if (!$a instanceof Animal) {
        //throw new InvalidArgumentException('$a is not an instance of Animal');
        echo '$a is an instance of ' . get_class($a) . PHP_EOL;
        continue;
    }
    echo $a->getName() . ' (' . $a->getScientificName() . ')' . PHP_EOL;
    echo $a->makeSound() . PHP_EOL;
    if ($a instanceof Human) {
        echo '3 + 7 + 11 + 2 = ' . $a->sum(3, 7, 11, 2) . PHP_EOL;
    } elseif ($a instanceof Cow) {
        echo 'Is it horned? ' . ($a->getIsHorned() ? 'Yes': 'No') . PHP_EOL;
    }
}