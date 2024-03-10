<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["candidate"]) && isset($_POST["user"])) {
        $selcan = $_POST["candidate"];
        $user = $_POST["user"];



        $sql = "UPDATE `users` SET `$selcan` = '1' WHERE `users`.`name` = '$user' ";
        $result = mysqli_query($conn, $sql);


        if ($result) {

            header("Location:../frontend/pages/thanks.php?error=$selcan");
            exit(); 
        } else {

            header("Location:../frontend/pages/voting.php?error=error");
            exit(); 
        }
    } else {

        echo "Candidate or user not set.";
    }
} else {

    echo "Invalid request method.";
}
?>
