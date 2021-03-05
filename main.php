<?php

spl_autoload_register(static function($class)
{
    $path = str_replace('\\', '/', $class. '.php');
    if (file_exists($path)){
        require_once $path;
    }
});

$myFarm = new Farm();


for ($i=0;$i<20;$i++) {
    $myFarm->addAnimal(new Chicken()); //add chickens
}

for ($i=0;$i<10;$i++) {
    $myFarm->addAnimal(new Cow()); //add cows
}



$eggsCount = 0;
$milkLitters = 0;


foreach ($myFarm->getAnimals() as $key => $el){
    if ($el instanceOf Chicken){
        $eggsCount += $myFarm->collectProducts()[$key];
    }
    if ($el instanceOf Cow){
        $milkLitters += $myFarm->collectProducts()[$key];
    }
}

echo "Count of milk " . $milkLitters . PHP_EOL;
echo "Count of eggs " . $eggsCount . PHP_EOL;




