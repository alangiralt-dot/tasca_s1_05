<?php
declare(strict_types=1);
class Cow extends Animal{
    // Attributes
    private bool $isHorned;
    // Constructor
    function __construct($name, $scientificName, $isHorned) {
        parent::__construct($name, $scientificName);
        $this->isHorned = $isHorned;
    }
    // Getters
    public function getIsHorned(): bool {
        return $this->isHorned;
    }
    // Methods
    public function makeSound(): string {
        return 'Moooooo';
    }
}