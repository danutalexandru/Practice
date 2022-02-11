<?php
include_once 'Product.php';
include_once 'C:\xampp\htdocs\VSCODE PROJ\query.php';
class Furniture extends Product implements query{
    private $height;
    private $width;
    private $length;


    public function setHeight($height){
        $this->height=$height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setWidth($width){
        $this->width=$width;
    }
    public function getWidth(){
        return $this->width;
    }
    public function setLength($length){
        $this->length=$length;
    }
    public function getLength(){
        return $this->length;
    }
    public function getinsertQ()
    {
        return $this->querryOut="INSERT INTO Products (Name,Price,Type) VALUES ('$this->name',$this->price,'Furniture')";
    }
    public function getinsertSpecific()
    {
        return $this->querryOut="INSERT INTO Furniture (SKU,Height,Width,Length) VALUES ((SELECT SKU FROM Products WHERE SKU=(SELECT max(SKU) FROM Products)),$this->height,$this->width,$this->length)";
    }
    public function getdeleteQ()
    {
        return $this->querryOut="";
    }

}