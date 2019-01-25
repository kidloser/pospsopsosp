<?php
    // if(isset($_GET))
    // {
    //     $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    //     echo json_encode($arr);
    // }
    //$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));
    //var_dump(json_decode($json, true));
    if(isset($_POST))
    {
        //var_dump($_POST);
        $data = $_POST["dataPost"];
        echo($data);
    }
?>