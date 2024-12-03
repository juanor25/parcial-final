<?php
    $servername = "localhost";
    $port = "5432";
    $username = "postgres";
    $password = "2002";
    $dbname = "usuarios";

    $data = "
        host=$servername
        port=$port 
        dbname=$dbname 
        user=$username
        password=$password
        ";

    $conn = pg_connect($data);

    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    } else {
        
    }
?>