//pripojenie k databaze
<?php
    class team{
        public $db;

        function get_team(){
            $this->db = new Database();
           
            try{
                $query = $this->db->conn->query("SELECT * FROM team");
                $team = $query->fetchAll(PDO::FETCH_OBJ);
                return $team;
                }catch(PDOException $e){
                   // print_r($e->getMessage());
                } 
            }
    }
    $team = new team();
?>