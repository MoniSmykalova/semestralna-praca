<?php
//NOVY ZAZNAM DO T.team
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_team'])){
    print_r("T");
    $data = [       //NOVY RIADOK
        'name' => $_POST["name"],
        'image' => $_POST["image"],
    ];
    
    $query = "INSERT INTO team (name, image) VALUES (:name, :image)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
}else{
    print_r("F");
}
?>