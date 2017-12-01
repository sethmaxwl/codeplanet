<?php 
    $servername = "localhost";
    $username = "westv1387";
    $password = "";
    $dbname = "CodeTN";
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn==FALSE) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>