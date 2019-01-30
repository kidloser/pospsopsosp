<?php
    if(isset($_GET['id'])){
        $a = $_GET['id'];
        echo(md5($a));
    }
?>