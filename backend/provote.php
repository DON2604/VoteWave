<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["candidate"]) && isset($_POST["user"])) {
        $selcan = $_POST["candidate"];
        $user = $_POST["user"];

        // Debugging: Check values
        // echo "Selected candidate: " . $selcan . "<br>";
        // echo "User: " . $user . "<br>";

        $sql = "UPDATE `users` SET `$selcan` = '1' WHERE `users`.`name` = '$user' ";
        $result = mysqli_query($conn, $sql);
        
        // Debugging: Check if query executed
        // var_dump($result);

        if ($result) {
            // Success: Redirect to thanks.php
            header("Location:../frontend/pages/thanks.php");
            exit(); 
        } else {
            // Error: Redirect back to voting page with error flag
            header("Location:../frontend/pages/voting.php?error=error");
            exit(); 
        }
    } else {
        // Error: Candidate or user not set
        echo "Candidate or user not set.";
    }
} else {
    // Error: Invalid request method
    echo "Invalid request method.";
}
?>
