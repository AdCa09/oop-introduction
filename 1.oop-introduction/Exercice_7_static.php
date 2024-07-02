<?php

class Beverage {

 
    private $color;
    private $price;
    private $temperature;

    private static $address = "Melkmarkt 9, 2000 Antwerp";

   
    public function __construct(string $color, float $price, string $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage costs {$this->price} euros, is {$this->temperature} and {$this->color}.";
    }

   
    public function getBarName(){
        return BARNAME;
    }

    public static function getAddress(){
        return self::$address;
    }

}



class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;

    
    public function __construct(string $name, float $alcoholPercentage, string $color = 'blond', float $price = 3.5, string $temperature = 'cold') {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() {
        return $this->alcoholPercentage;
    }
    public function getBeerName(){
        return BARNAME;
    }
    
}

$duvel = new Beer('Duvel', 8.5);


echo $duvel->getInfo() . "\n";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "%\n";
echo "Alcohol percentage: " . number_format($duvel->getAlcoholPercentage(), 1) . "%\n";



// 
define("BARNAME", "Het Vervolg");
//Les constantes définies avec define ont une portée globale. Elles peuvent être utilisées partout dans le script, y compris à l'intérieur des fonctions et des méthodes.Ne peux pas être utilisé à l'intérieur d'une classe.



//ou : const BARNAME = "Het Vervolg";
//Les constantes définies avec const ont une portée limitée. Elles sont accessibles uniquement dans le scope où elles sont définies, souvent utilisé à l'intérieur des classes. Utilisé principalement pour définir des const au niveau des classes. 


echo BARNAME . "\n";


echo  $duvel->getBarName(). "\n";
echo $duvel->getBeerName(). "\n";



// TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

echo Beverage::getAddress() . "\n";

echo Beverage::$address . "\n";
//need to change the visibilty to public to display this one 