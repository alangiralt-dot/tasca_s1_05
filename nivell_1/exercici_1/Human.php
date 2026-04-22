<?php
declare(strict_types=1);
class Human extends Animal {
    // Methods
    public function makeSound(): string {
        return 'Hmm...';
    }
    public function sum(float ...$addends): float {
        return array_sum($addends);
    }
}