<?php
    class Database{
        public $conn; 
        function_contruct ()
        {
            //spojenie, meno a heslo do db
            $this->conn = new PDO('mysql:host=localhost;dbname=učitelia;charset=utf8','root', ''); 

            if($this->conn){
                echo 'Sme spojeni s databazou';
            }else{
                echo 'Nie sme spojeni s databazou'; 
            }
        }
    }
$db = new Database(); 
$db->conn; 
?>