<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "users"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn) {

    }
    else{
        echo 'connection failed';
    }
}
?>