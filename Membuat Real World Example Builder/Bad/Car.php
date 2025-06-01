<?php

class Car
{
    public $engine;
    public $wheels;
    public $body;
    public $transmission;

    public function __construct($engine, $wheels, $body, $transmission)
    {
        $this->engine = $engine;
        $this->wheels = $wheels;
        $this->body = $body;
        $this->transmission = $transmission;
    }

    public function __toString()
    {
        return "Car with engine: {$this->engine}, wheels: {$this->wheels}, body: {$this->body}, transmission: {$this->transmission}";
    }
}

class CarBuilder
{
    public $engine;
    public $wheels;
    public $body;
    public $transmission;

    public function setEngine($engine)
    {
        $this->engine = $engine;
        return $this;
    }

    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
        return $this;
    }

    public function build()
    {
        return new Car($this->engine, $this->wheels, $this->body, $this->transmission);
    }
}

// Example usage
$carBuilder = new CarBuilder();
$car = $carBuilder->setEngine('V8 Engine')
    ->setWheels('18 inch Alloy Wheels')
    ->setBody('SUV')
    ->setTransmission('Automatic')
    ->build();

echo $car;
