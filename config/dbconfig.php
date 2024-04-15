<?php 
    class DBConnect {
        public function connect() {
         
            $host='localhost'; 
            $dbname = 'accounts';
            $user='root'; 
            $password = ''; 
        

            $dsn = "mysql:dbname=$dbname;host=$host;port=3307"; 
            
            try {
                $pdo = new PDO($dsn, $user, $password);

                return $pdo;

            } catch(PDOException $e) {
                throw new PDOException($e->getMessage());
            }
        }

        public function testConnection() {
            try {
                if ($this->connect()) {
                    echo "Connection Done! Successful 1"; 
                }
            } catch(PDOException $e) { 
                echo "Database Connection failed: " . $e->getMessage();   
            }
        }

        public function execSQL($sql=''){
            //echo $sql;
            $pdo = $this->connect();
            
            $query = $pdo->query($sql);
            //print_r($query->rowCount());
            $rows=$query->fetch();
            return $rows;
        }

        public function insertData($insert=''){
            $pdo = $this->connect();
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            print_r('<br>'.$insert);
            $stmt = $pdo->prepare($insert);
            
            return $stmt->execute();
        }
        
        
    }
?>