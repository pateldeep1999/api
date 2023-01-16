<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include 'config.php';

$sql = 'SELECT * FROM `classic-snake-data`';

$result = mysqli_query($con, $sql) or die('SQL query failed.');

if(mysqli_num_rows($result) > 0){

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

} else {

    echo json_encode(array('message'=>'No record found', 'status'=>false));

}

?>
