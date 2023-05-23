<?php
    require('../config.php');
    session_start();
                            //ukladanie a prístup k premenným session
    $users = $User->get_users();            //získa všetkých používateľov z databázy
    $db =  new Database();              //pripojenie k databáze
    $data = [
        'user_email' => $_POST["user_email"],
        'user_password' => md5($_POST["user_password"]), //JEDNODUCHE SIFROVANIE
    ];
    $found = False;
    $user_name = "";
    if(isset($_POST['log_user'])){ //kontroluje, či bola odoslaná požiadavka na prihlásenie používateľa
        foreach($users as $user){
            if($data['user_password']==$user->user_password){
                $found = True;
                $user_name = $user->user_name;
            }
        }
        if($found==True){
            $_SESSION['valid'] = true;
            $_SESSION['user_name'] = $user_name ;
            //print_r($_SESSION);
            header("Location: ../../admin.php");
        }else{
            echo 'Nesprávne heslo';
        }
    }

?>