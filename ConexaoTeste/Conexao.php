<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "lucas";
    $port = 3306;

    //Conexão com a porta
    $conn = new PDO("mysql:host=$host; port=$port;dbname=" .$dbname, $user, $pass);

    
?>