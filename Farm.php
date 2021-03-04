<?php


class Farm
{

    private $barn;
    private $animals = [];

    public function __construct(Barn $barn)
    {
        $this->barn = $barn;
    }

    /**
     * @return int
     */
    public function returnMilk(): int
    {
        return $this->barn->howMuchMilk();

    }


    /**
     * @return int
     */
    public function returnEggs(): int
    {
        return $this->barn->howMuchEggs();

    }

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal; //add the animal to the array
    }

    public function collectProducts():void  //collection of products
    {
        foreach ($this->animals as $animal)
        {
            if ($animal instanceOf produceMilk) { //if it gives milk => collect milk
                $milkLiters = $animal->produceMilk();
                $this->barn->addMilk((int)$milkLiters);
            }

            if ($animal instanceOf produceEggs) { //if eggs => collect eggs
                $eggsCount = $animal->produceEggs();
                $this->barn->addEggs((int)$eggsCount);
            }
        }
    }
}

