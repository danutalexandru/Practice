<?php
    
    include_once('config.php');
    $dbConnection=new Database;
    $query="SELECT * from Products";
    $conn=$dbConnection->getConnection();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scandiweb</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
    
    <div class=card-deck>
<?php



$records = mysqli_query($conn,$query); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  
    <div class="col-2 pb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="products[]" value="$data['SKU']">
                                </label>
                            </div>
                            <h4 class="card-title"><?php echo $data['SKU']; ?></h4>
                            <p class="card-text"><?php echo $data['Name']; ?></p>
                            <p class="card-text"><?php echo $data['Price']; ?></p>
                            <?php
                                $sku=$data['SKU'];
                                $type=$data['Type'];
                                $q=mysqli_query($conn,"SELECT * from $type WHERE SKU='$sku'");
                                $info=mysqli_fetch_array($q); 
                                if ($info['Size'] !== "") {
                                    echo "<p> Size: ".$info['size']." MB </p>";
                                } else if ($res['weight'] !== "") {
                                    echo "<p> Weight: ".$res['weight']." KG </p>";
                                } else {
                                    echo "<p> Dimension: ".$res['dimension']."</p>";
                                }
                                 
                            ?>
                            
                        </div>
                    </div>
                
  </div>	
<?php
}
?>
                
                </div>          
        


    </body>
</html>