<?php
/**
 *Author: Marielle Harrell
 *Date: 11/15/2022
 *File: sausageModel.class.php
 *Description:
 */

class Sausage
{
    //private attributes
    private $id, $name, $description, $price, $stock_quantity, $heat;

    public function __construct($id, $name, $price, $stock_quantity, $description, $heat)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->description = $description;
        $this->heat = $heat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function getHeat()
    {
        return $this->heat;
    }

    public function getStock()
    {
        return $this->stock_quantity;
    }



}
