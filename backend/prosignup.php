<?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $err='';
        $name = $_POST["fullname"];
        $email= $_POST["email"];
        $pass= $_POST["password"];
        $exists=false;
        
        try {
            $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                header("Location:../frontend/pages/voting.php?user=name");
                exit(); 
            } else {
                header("Location:../frontend/pages/signup.php?error=error");
                exit(); 
            }
        } catch (mysqli_sql_exception $e) {
            
            $errorMessage = $e->getMessage();
            header("Location:../frontend/pages/signup.php?error=$errorMessage");
            exit();
        }
    }
?>