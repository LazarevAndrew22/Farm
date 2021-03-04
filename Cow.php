<?php


class Cow implements Animal, produceMilk
{
    public $id;
    public function __construct()
    {
        $this->id = substr(md5(mt_rand()), 0, 6); //get a random 6 character id
    }

    /**
     * @return int
     * @throws Exception
     */
    public function produceMilk(): int
    {
        return random_int(8, 12); //we get from 8 to 12 liters of milk
    }
}