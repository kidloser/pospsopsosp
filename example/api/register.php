<?php
    include('../controller/UserCtrl.php');
    if(isset($_POST['dataPost'])){
        $abc = $_POST['dataPost'];
        $json = json_decode($abc, true);
        $username = $json['username'];
        $password = $json['password'];
        UserCtrl::InsertUser($username,$password);
    }
?>