<?php


class Cow
{
    protected $id;
    protected $countCow = 10;

    public function __construct()
    {
        $this->id = random_int(1000, 9999); //получаем случаный id длинною в 4 символов
    }

    public function getMilk(): int
    {
        return random_int(8, 12); //получаем 8-12 литров молока
    }

    /**
     * @return int
     */
    public function getIdCow():int
    {
        return $this->id;
    }

    public function addCow():int
    {
        return ++$this->countCow;
    }

    /**
     * @return int
     */
    public function getCountCow(): int
    {
        return $this->countCow;
    }
}