<?php
require('../Database.php');    //pripojenie k databaze
$db =  new Database();
if(isset($_POST['delete_contact'])){    //overuje, či bola odoslaná požiadavka na mazanie 
    try{
        $id = $_POST["delete_contact"];
        $sql = $sql = 'DELETE FROM contact WHERE id ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>
//mazanie kontaktných údajov z tabuľky "contact" v databáze