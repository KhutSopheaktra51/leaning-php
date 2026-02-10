<?php
    if(isset($_SESSION['user_id'])){
        echo $_SESSION['user_id'];
    }

    echo 'LEVEL:'. (isAdmin() ? 'admin':'user');
    // if(isAdmin()){
    //     echo 'LEVEL : admin';
    // }else{
    //     echo 'LEVEL : user';
    // }

?>

<h1>Dashbaord</h1>