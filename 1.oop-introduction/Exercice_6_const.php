<?php

class Beverage {

    // TODO: Change the properties to private.
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

    // TODO: Create a function in beverage and use the constant.
    public function getBarName(){
        return BARNAME;
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
// TODO: Do the same in the beer class.
    public function getBeerName(){
        return BARNAME;
    }
    
}

$duvel = new Beer('Duvel', 8.5);


echo $duvel->getInfo() . "\n";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "%\n";
echo "Alcohol percentage: " . number_format($duvel->getAlcoholPercentage(), 1) . "%\n";



// TODO: Make a const barname with the value 'Het Vervolg'.
//Deux maniére de déclarer une const: 
define("BARNAME", "Het Vervolg");
//Les constantes définies avec define ont une portée globale. Elles peuvent être utilisées partout dans le script, y compris à l'intérieur des fonctions et des méthodes.Ne peux pas être utilisé à l'intérieur d'une classe.



//ou : const BARNAME = "Het Vervolg";
//Les constantes définies avec const ont une portée limitée. Elles sont accessibles uniquement dans le scope où elles sont définies, souvent utilisé à l'intérieur des classes. Utilisé principalement pour définir des const au niveau des classes. 

// TODO: Print the constant on the screen.
echo BARNAME . "\n";

/* TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.*/
echo  $duvel->getBarName(). "\n";
echo $duvel->getBeerName(). "\n";

