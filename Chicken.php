<?php


class Chicken implements Animal, produceProduct
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
        return random_int(0, 1); //we get 0 or 1 egg
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