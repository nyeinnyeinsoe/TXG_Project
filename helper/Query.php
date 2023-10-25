<?php
    include 'Connection.php';
    trait Query{
        use Connection;

        public function selectRecord($query){
            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description : " . $conn->error . "</br>";
            }
            else{
                $result = $conn->query($query);
            }
            $this->disconnect($conn);
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    return $row;
                }
            }
        }

        public function selectList($query){
            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description : " . $conn->error . "</br>";
            }
            else{
                $result = $conn->query($query);
            }
            $this->disconnect($conn);
            return $result;
        }

        public function insert($tablename,$data){
            $keys = array_keys($data);
            $values = array_values($data);

            $fieldString = "(";
            foreach ($keys as $key) {
                $fieldString .= $key . ",";
            }
            $fieldString = substr($fieldString,0,-1);
            $fieldString .= ")";

            $valueString = "(";
            foreach ($values as $value) {
                $valueString .= "'" . $value .  "',";
            }
            $valueString = substr($valueString,0,-1);
            $valueString .= ")";

            $query = "insert into {$tablename} {$fieldString} values {$valueString}";

            // public function update($tablename,$data,$condition){
            //     update tablename set
            //         key = value,
            //         key = value,
            //         key = value,
            //         where id = 1;

            // present for student
            // }
            
            // print_r($query);

            $conn = $this->connect();

            if($conn->query($query) === false){
                echo "Error Description : " . $conn->error . "</br>";
            }

            $this->disconnect($conn);
        }

        // public function update($tablename,$data,$condition){
        //     $keys = array_keys($data);
        //     $values = array_values($data);

        //     $query = "Update {$tablename} set {}"
        // }
        public function update($tablename,$data,$condition){
            // UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;

            $filed ="";
            foreach ($data as $key => $value) {
                $filed .= $key ."=" ."'" . $value ."',";
            }

            $filed = substr($filed,0,-1);

            $query = "update {$tablename} set {$filed} {$condition}";

            // echo $query;

            $conn = $this->connect();

            if($conn->query($query) === false){
                echo "Error Description : " . $conn->error . "</br>";
            }
            $this->disconnect($conn);
        }

        public function delete($tablename,$condition){
            $query = "Delete from {$tablename} {$condition}";

            $conn = $this->connect();

            if(!$conn->query($query)){
                echo "Error Description : " . $conn->error . "</br>";
            }

            $this->disconnect($conn);

        }
    }
?>