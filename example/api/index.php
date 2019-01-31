<?php
// if(isset($_GET))
// {
//     $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//     echo json_encode($arr);
// }
//$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

//var_dump(json_decode($json));
//var_dump(json_decode($json, true));
if (isset ($_POST))
{
    if (isset ($_POST["dataPost"]))
    {
        $data = $_POST["dataPost"];
        echo ($data);
    }
}
$list = array ();
for ($i = 1; $i < 5; $i++)
{
    $data = new stdClass(); // create a new object
    $data->id = $i;
    $data->name = "abc" . $i;
    array_push($list, $data);
}
echo json_encode($list);


?>