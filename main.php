<?php

spl_autoload_register(function($class)
{
    $path = str_replace('\\', '/', $class. '.php');
    if (file_exists($path)){
        require_once $path;
    }
});


$barn = new Barn();

$myFarm = new Farm($barn);

for ($i=0;$i<20;$i++) {
    $myFarm->addAnimal(new Chicken()); //add chickens
}

for ($i=0;$i<10;$i++) {
    $myFarm->addAnimal(new Cow()); //add cows
}


$myFarm->collectProducts(); //collecting products


//results ->
echo "Milk collected " . $myFarm->returnMilk(). PHP_EOL;
echo "Eggs collected " .$myFarm->returnEggs(). PHP_EOL;

