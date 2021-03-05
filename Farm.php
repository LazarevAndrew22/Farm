<?php


class Farm
{
    private $animals = [];
    private $result = [];
    private $idAnimalsList = [];


    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal; //add the animal to the array
    }

    /**
     * @return array
     */

    public function collectProducts(): array  //collection of products
    {
        foreach ($this->animals as $animal) {
            $this->result[] = $animal->produceProduct();
        }
        return $this->result;
    }

    /**
     * @return array
     */
    public function idAnimalsList(): array
    {
        foreach ($this->animals as $animal) {
            $this->idAnimalsList[] = $animal->getId();
        }
        return $this->idAnimalsList;
    }

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }
}

