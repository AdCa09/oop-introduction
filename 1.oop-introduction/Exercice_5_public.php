<?php

declare(strict_types=1);



class Beverage 
{
  
    
    public function __construct(private string $color, private float $price, private string $temperature = 'cold')
    {}

    public function getInfo()
    {
        
        return "This beverage costs $this->price euros, is $this->temperature and $this->color.";
    }
    public function changePrice(float $newPrice){

        $this->price = $newPrice;
    }
}


$cola = new Beverage("black", 2 , "cold");


echo $cola->getInfo() .PHP_EOL;

echo $cola->changePrice(3.5);

echo $cola->getInfo();

