<?php
    include "conn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $err='';
        $mail= $_POST["email"];
        $pass= $_POST["password"];
        $exists=true;
        if ($exists == true) {
            $query = " SELECT * FROM `users` WHERE `email` = '$mail' AND `password` = '$pass' "; 
            $query2 = "SELECT * FROM users WHERE `email` = '$mail' AND (`nete` = 1 OR `2star` = 1 OR `ndenv`=1 OR `teatm` = 1);";
            $res=$conn->query($query);
            $res2=$conn->query($query2);
            if($res->num_rows == 1 && $res2->num_rows == 0){
                $row = $res->fetch_assoc();
                $name = $row['name'];
                header("Location:../frontend/pages/voting.php?user=$name");
                exit();
            }
            elseif($res->num_rows == 1 && $res2->num_rows == 1){
                $row = $res->fetch_assoc();
                $name = $row['name'];
                header("Location:../frontend/pages/voting.php?user=$name&error=$res->num_rows");
                exit();
            }
            else{
                header("Location:../frontend/pages/login.php?error=incorrect credentials");
                exit();
            }
           $conn->close(); 
    }
}
?>