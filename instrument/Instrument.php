<?php

class Instrument{
        
    private string $serialNumber;
    private float $price;
    private array $properties;

    public function __construct($serialNumber,$price,$properties){
        $this->serialNumber=$serialNumber;
        $this->price=$price;
        $this->properties=$properties;
    }

    public function getSerialNumber(): string {
        return $this->serialNumber;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $newPrice) {
        $this->price=$newPrice;
    }

    public function getProperty(string $propertyName): array {
        return $this->properties[$propertyName];
    }

    public function getProperties(): array {
        return $this->properties;    
    }

    public function matches(array $comparison_properties): bool {

        foreach ($comparison_properties as $propName => $propVal) {
            if($propVal !== $this->properties[$propName]){
                return false;
            }
        }
        return true;
    }
}
