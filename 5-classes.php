<?php

/**
 * Classes
 *
 * 1. Class declaration and instantiation
 * 2. Constructor
 * 3. Getters and setters
 * 4. Access modifiers
 * 5. Inheritance
 */


// 1. Class declaration and instantiation
echo "\n" . '____________________________' . "\n";
echo '1. Class declaration and instantiation' . "\n";

class Test
{

}

$test = new Test();

var_dump($test);


// 2. Constructor
echo "\n" . '____________________________' . "\n";
echo '2. Constructor' . "\n";

class Car
{
    public function __construct($brand)
    {
        $this->brand = $brand;
    }
}

$car = new Car('Renault');

var_dump($car);

// 3. Getters and setters
echo "\n" . '____________________________' . "\n";
echo '3. Getters and setters' . "\n";

class Bike
{
    private $brand;
    private $year;
    private $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
}

$bike = new Bike('Yamaha', 'black');
$bike->setYear(2017);

var_dump($bike->getYear());


// 4. Access modifiers
echo "\n" . '____________________________' . "\n";
echo '4. Access modifiers' . "\n";

class Boat
{
    private $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }
}

$boat = new Boat('Renault');

var_dump($boat);


// 5. Inheritance
echo "\n" . '____________________________' . "\n";
echo '5. Inheritance' . "\n";

abstract class Animal
{
    public $color;
    public $habitat;

    public function makeSound()
    {
        echo 'Sound';
    }
}


class Dog extends Animal
{
    public $bark;
}

// This will throw a fatal error
$animal = new Animal();

$dog       = new Dog();
$dog->bark = 'Au au';

var_dump($dog->bark);
var_dump($dog->makeSound());



