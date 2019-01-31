<?php
include ('../db/db.php');
class UserCtrl
{
    public static function InsertUser($username, $password)
    {
        $conn = db::open();
        $pass = md5($password);
        $sql = "insert into user(username,password) values ('$username','$pass')";
        $result = db::query($conn, $sql);
        echo ($result);
    }
    public static function Login($username, $password)
    {
        $conn = db::open();
        $pass = md5($password);
        $sql = "select * from user where username = '$username' and password = '$pass'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row['id'] == null)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
}
?>