<?php

include 'Products/Book.php';
include 'Products/DVD.php';
include 'Products/Furniture.php';
include 'Database.php';
$obj=new DVD;
$dbConnection=new Database;
$dbConnection->createTables();
$conn=$dbConnection->getConnection();
$listProduct=array();
$select="SELECT * from Products";
$return=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($return)){
  $listProduct[] = $row;
}
foreach($listProduct as $product){
  echo $product['SKU'];
  echo "\n";
  echo $product['Name'];
  echo "\n";
  echo $product['Price'];
  echo "\n";
  echo $product['Type'];
  echo "\n";
}

$obj->setName("Carte");
$obj->setPrice("50");
$obj->setSize("20");
$querryImplements= $obj->getinsertQ();
  echo $querryImplements ;

if($conn->query($obj->getinsertQ())===TRUE){
  echo "Inserat cu succes";
}else{
  echo "Eroare la inserarea in tabel";
}
$querryImplements= $obj->getinsertSpecific();
  echo $querryImplements ;

if($conn->query($obj->getinsertSpecific())===TRUE){
  echo "Inserat cu succes";
}else{
  echo "Eroare la inserarea in tabel";
}

?>

