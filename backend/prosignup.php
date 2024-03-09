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
                header("Location:../frontend/pages/voting.php");
                exit(); // Don't forget to exit after redirection
            } else {
                // Redirect with an error message
                header("Location:../frontend/pages/signup.php?error=error");
                exit(); // Don't forget to exit after redirection
            }
        } catch (mysqli_sql_exception $e) {
            // Handle the exception
            $errorMessage = $e->getMessage();
            header("Location:../frontend/pages/signup.php?error=$errorMessage");
            exit(); // Don't forget to exit after redirection
        }
    }
?>