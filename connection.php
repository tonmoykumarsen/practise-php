<?php

//database credential
$host="localhost";
$username="root";
$password="";
$databaseName="crud";


//connection Create
$conn= new mysqli(hostname: $host, username: $username, password: $password, database: $databaseName);

//connection check
if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
}
//die("Connection success:");

?>