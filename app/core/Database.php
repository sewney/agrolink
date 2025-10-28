<?php
    Trait Database{
        private function connect(){
            $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
            $con = new PDO($string, DBUSER, DBPASS);
            return $con;
        }

        public function query($query, $data=[]){
            $con = $this->connect();
            $stm = $con->prepare($query);

            $check = $stm->execute($data);
            if($check){
                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                if (is_array($result) && count($result)) {
                    return $result;
                }
            }
            return 1;
        }

        public function get_row($query, $data=[]){
            $con = $this->connect();
            $stm = $con->prepare($query);

            $check = $stm->execute($data);
            if($check){
                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                if (is_array($result) && count($result)) {
                    return $result[0];
                }
            }
            return 1;
        }

        // NEW: execute INSERT/UPDATE/DELETE
        public function write($query, $data=[]){
            $con = $this->connect();
            $stm = $con->prepare($query);
            if ($stm->execute($data)) {
                // return insert id if available, otherwise true
                $id = $con->lastInsertId();
                return $id ? (int)$id : true;
            }
            return 1;
        }
    }
    