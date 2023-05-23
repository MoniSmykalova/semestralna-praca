<?php
            //ODHLASENIE A UKONCENIE AKTUALNEJ RELACIE
    session_start();
     unset($_SESSION["user_name"]);     //ODSTRANENIE INFORMACIE O PRIHL.USER
     echo 'Boli ste odhlásení';
    
?>