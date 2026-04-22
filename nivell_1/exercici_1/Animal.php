<?php
declare(strict_types=1);
abstract class Animal {
    // Properties and Constructor
    public function __construct(
        private string $name,
        private string $scientificName
    ){
        if(mb_strlen($name) === 0) throw new InvalidArgumentException('$name is empty');
        if(mb_strlen($scientificName) === 0) throw new InvalidArgumentException('$scientificName is empty');
    }
    // Getters
    public function getName(): string {
        return $this->name;
    }
    public function getScientificName(): string {
        return $this->scientificName;
    }
    // Methods
    public abstract function makeSound(): string;
}