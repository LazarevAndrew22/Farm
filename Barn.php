<?php


class Barn
{
    private $milkLiters = 0;
    private $eggsCount = 0;

    /**
     * @param int $liters
     * @return int
     */
    public function addMilk(int $liters): int
    {
        return $this->milkLiters += $liters; //add all the milk
    }

    /**
     * @param int $eggsCount
     * @return int
     */
    public function addEggs(int $eggsCount): int // add all the eggs
    {
        return $this->eggsCount += $eggsCount;
    }

    /**
     * @return int
     */
    public function howMuchMilk(): int
    {
        return $this->milkLiters;
    }

    /**
     * @return int
     */
    public function howMuchEggs(): int
    {
        return $this->eggsCount;
    }
}