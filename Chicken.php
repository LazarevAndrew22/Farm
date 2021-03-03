<?php


class Chicken
{
    protected $id;
    protected $countChicken = 20;

    public function __construct(){
        $this->id = random_int(1000, 9999); //получаем случаный id длинною в 4 символов
    }

    public function getEggs(): int
    {
        return random_int(0, 1); //получаем 0 или 1 л молока
    }

    /**
     * @return int
     */
    public function getIdChicken():int
    {
        return $this->id;
    }

    public function addChicken():int
    {
        return ++$this->countChicken;
    }

    /**
     * @return int
     */
    public function getCountChicken(): int
    {
        return $this->countChicken;
    }

}