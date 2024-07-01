<?php

class Beverage {
    private $color;
    private $price;
    private $temperature;

   
    public function __construct(string $color, float $price, string $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage costs {$this->price} euros, is {$this->temperature} and {$this->color}.";
    }
}

// TODO: Make class beer that extends from Beverage.
class Beer extends Beverage {
    // TODO: Create the properties name (string) and alcoholPercentage (float).
    private $name;
    private $alcoholPercentage;

    // TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    public function __construct(string $name, float $alcoholPercentage, string $color = 'blond', float $price = 3.5, string $temperature = 'cold') {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

// TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    public function getAlcoholPercentage() {
        return $this->alcoholPercentage;
    }
}

// TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('Duvel', 8.5);

// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
echo $duvel->getInfo() . "\n";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "%\n";
echo "Alcohol percentage: " . number_format($duvel->getAlcoholPercentage(), 1) . "%\n";

// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage()



