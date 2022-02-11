<?php
include_once 'Product.php';
include_once 'C:\xampp\htdocs\VSCODE PROJ\query.php';
class Book extends Product implements query{
    private $weight;
    private $querryOut;
    private static $Type="Book";


    public function setWeight($weight){
        $this->weight=$weight;
    }
    public function getWeight(){
        return $this->weight;
    }

    public function getinsertQ()
    {
       return $this->querryOut="INSERT INTO Products (Name,Price,Type) VALUES ('$this->name',$this->price,'Book')";
        
    }
    public function getinsertSpecific()
    {
       return $this->querryOut="INSERT INTO Book (SKU,Weight) VALUES((SELECT SKU FROM Products WHERE SKU=(SELECT max(SKU) FROM Products)),$this->weight)";
    }
    public function getdeleteQ()
    {
        return $this->querryOut="";
    }
}