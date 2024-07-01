<?php

declare(strict_types=1);

/* EXERCISE 1





USE TYPEHINTING EVERYWHERE!
*/


class beverage 
{
    public $color;
    public $price;
    public $temperature;

    // TODO: Create a class beverage.
    // TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    // TODO: Have a default value "cold" in the construct for temperature.
    
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        // TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
        //Adding euro for the echo 
        return "This beverage costs $this->price euros, is $this->temperature and $this->color.";
    }
}
// TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//  print the getInfo on the screen.
$cola = new beverage("black", 2 , "cold");

echo $cola->getInfo();

// TODO: Print the temperature on the screen.
echo $cola->temperature;
