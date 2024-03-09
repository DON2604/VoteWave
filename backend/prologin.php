<?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $err='';
        $mail= $_POST["email"];
        $pass= $_POST["password"];
        $exists=true;
        
        if ($exists == true) {
            $query = " SELECT * FROM `users` WHERE `email` = '$mail' AND `password` = '$pass' "; 
            
            $res=$conn->query($query);
            if($res->num_rows == 1){
                $row = $res->fetch_assoc();
                $name = $row['name'];
                header("Location:../frontend/pages/voting.php?user=$name");
                exit();
            }
            else{
                header("Location:../frontend/pages/login.php?error=Incorrect credentials");
                exit();
            }
           $conn->close(); 
    }
}
?>