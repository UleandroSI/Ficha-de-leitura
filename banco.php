<?php
    $host = "localhost:90";
    $user = "ti";
    $password = "zt049br";
    $database = "livros_db";

    // Create connection
    $conn = new mysqli($host, $user, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>