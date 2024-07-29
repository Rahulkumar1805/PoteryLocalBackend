<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "poetrydb";

    $conn = new mysqli($servername , $username , $password , $db);
    if($conn -> connect_error){
        die("connection failed : ".$conn->connect_error);
    }  

    $POETRY = $_POST['poetry_data'];
    $POET_NAME = $_POST['poet'];

    $query = "INSERT INTO poetry(poetry_data , poet)VALUES('$POETRY','$POET_NAME')";
    $result = $conn->query($query);

    if($result==1){
        $response = array("status" => 1,"message"=> "Successfully inserted");
    }
    else{
        $response = array("status" => 0,"message"=> "poetry not inserted");
    }

    echo json_encode($response);

?>