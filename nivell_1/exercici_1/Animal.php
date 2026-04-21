<?php
declare(strict_types=1);
abstract class Animal {
    // Properties and Constructor
    function __construct(
        private string $name,
        private string $scientificName
    ){}
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