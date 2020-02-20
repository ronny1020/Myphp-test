<?php

class Animal
{
    public function MakeNoise()
    {
        echo "Animal:...<br>";
    }
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "The bird is {$this->name}.";
    }
    public $weight = 1;

}

class fish extends Animal
{
    public function MakeNoisewithwater()
    {
        parent::MakeNoise();
        echo "withwater";
    }
}

$bird = new Animal("bird1");
$bird->MakeNoise();
echo $bird->weight; // No $ before weight
echo "<br>";
echo $bird->name;
echo "<br>";

echo "<br>";
$bird2 = new Animal("bird2");
echo "<br>";
echo $bird2->name;
echo "<br>";

echo "<br>";
$fish = new fish("fish1");
echo "<br>";
echo $fish->name;
$fish->MakeNoisewithwater();
echo "<br>";
//__destruct  will run here