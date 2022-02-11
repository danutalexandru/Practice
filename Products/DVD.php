<?php
include_once 'Product.php';
include_once 'C:\xampp\htdocs\VSCODE PROJ\query.php';
class DVD extends Product implements query{
    private $size;

    public function setSize($size){
        $this->size=$size;
    }
    public function getSize(){
        return $this->size;
    }
    public function getinsertQ()
    {
        return $this->querryOut="INSERT INTO Products (Name,Price,Type) VALUES ('$this->name',$this->price,'DVD')";
    }
    public function getinsertSpecific()
    {
        return $this->querryOut="INSERT INTO DVD (SKU,Size) VALUES ((SELECT SKU FROM Products WHERE SKU=(SELECT max(SKU) FROM Products)),$this->size)";
    }
    public function getdeleteQ()
    {
        return $this->querryOut="";
    }
    

}