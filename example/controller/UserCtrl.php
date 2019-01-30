<?php 
    include('../db/db.php');
    class UserCtrl{
        public static function InsertUser($username,$password){
            $conn = db::open();
            $pass = md5($password);
            $sql = "insert into user(username,password) values ('$username','$pass')";
            $result = db::query($conn,$sql);
            echo($result);
        }
    }
?>