<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "poetrydb";

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}

$ID = $_POST['id'];

$query = "DELETE FROM poetry WHERE id = $ID";
$result = $conn->query($query);
if($result == 1){
    $response = array("status" =>1, "message"=> "Potery Deleted");
}
else{
    $response = array("status"=> 0, "message"=> "Deletion not performed");
}    
echo json_encode($response);

?>