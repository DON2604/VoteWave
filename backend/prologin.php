<?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $err='';
        $email= $_POST["email"];
        $pass= $_POST["password"];
        $exists=true;
        
        if ($exists == true) {
            $query = "SELECT *FROM users WHERE email='$email' AND password = '$pass'"; 
            
            $res=$conn->query($query);
            if($res->num_rows == 1){
                
            }
            
    }
?>