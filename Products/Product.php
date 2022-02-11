<?php


abstract class Product{
    private $SKU;
    protected $name;
    protected $price;
    private $type;

    // function __construct(int $SKU,string $name, float $price, string $type)
    // {
    //     $this->$SKU=$SKU;
    // }


    public function setSKU($SKU){
        $this->SKU=$SKU;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setType($type){
        $this->type=$type;
    }
    public function getSKU(){
        return $this->SKU;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getType(){
        return $this->type;
    }
}
