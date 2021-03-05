<?php


class Cow implements Animal, produceProduct
{
    private $id;
    public function __construct()
    {
        $this->id = substr(md5(mt_rand()), 0, 6); //get a random 6 character id
    }

    /**
     * @return int
     * @throws Exception
     */
    public function produceProduct(): int
    {
        return random_int(8, 12); //we get from 8 to 12 liters of milk
    }

    public function getNameOfClass(): string
    {
        return static::class;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}