<?php
    trait Connection{
        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "techxagon";

        public function connect(){
            $conn = mysqli_connect($this->server,$this->username,$this->password,$this->dbname);
            if(!$conn){
                die("Connection Failed" . mysqli_connect_error());
            }
            return $conn;
        }

        public function disconnect($dis){
            $dis->close();
        }
    }
?>