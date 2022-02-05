<?php
    $host = "localhost:90";
    $user = "ti";
    $password = "zt049br";
    $database = "livros_db";

    //Cria conexao
    $conn = new mysqli_connect($host, $user, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    echo "Connected successfully";
?>