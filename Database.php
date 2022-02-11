    <?php
    include_once'cfg.php';
    class Database{
        private $conn;
        
        function __construct(){
            $this->conn = new mysqli(DBHOST,DBUSER,DBPASSWORD,DBNAME,3306);
            if($this->conn->connect_error){
                die("Connection failed ". $this->this->conn->connect_error); 
                echo "Fail";
            }
            echo "Success";
        }
        function createTables(){
            $sql="CREATE TABLE Products (SKU INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                Name VARCHAR(30) NOT NULL, 
                                Price FLOAT (8) NOT NULL,
                                Type VARCHAR(30) NOT NULL)";
            if ($this->conn->query($sql) === TRUE) {
            echo "Tabel Products creat cu succes";
            } else {
            echo "Error creating table: Products " . $this->conn->error;
            }
            $sql="CREATE TABLE Book (SKU INT (4) UNSIGNED,
                                    FOREIGN KEY (SKU) REFERENCES Products (SKU),
                                    Weight FLOAT (8) NOT NULL)";

            if ($this->conn->query($sql) === TRUE) {
            echo "Tabel Books creat cu succes";
            } else {
            echo "Error creating table: Books " . $this->conn->error;
            }
            $sql="CREATE TABLE DVD (SKU INT (4) UNSIGNED,
                                    FOREIGN KEY (SKU) REFERENCES Products (SKU),
                                    Size INT (4) NOT NULL)";

            if ($this->conn->query($sql) === TRUE) {
            echo "Tabel DVDs creat cu succes";
            } else {
            echo "Error creating table: DVDs " . $this->conn->error;
            }
            $sql="CREATE TABLE Furniture (SKU INT (4) UNSIGNED,
                                    FOREIGN KEY (SKU) REFERENCES Products (SKU),
                                    Height INT (4) NOT NULL,
                                    Width INT (4) NOT NULL,
                                    Length INT (4) NOT NULL)";

            if ($this->conn->query($sql) === TRUE) {
            echo "Tabel Furniture creat cu succes";
            } else {
            echo "Error creating table: Furniture " . $this->conn->error;
            }
        }
        public function getConnection(){
            return $this->conn;
        }

    }