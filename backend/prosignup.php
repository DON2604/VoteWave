<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "users"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn) {
        echo "success";
    }
    else{
        echo "failed";
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $err='';
        $name = $_POST["fullname"];
        $email= $_POST["email"];
        $pass= $_POST["password"];
        $exists=false;
        if($exists==false)
        {
          $sql="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
          $result=mysqli_query($conn,$sql);
          if($result){
            $err='false';
          }
          else{
            $err='true';
          }
        }
        }
}
?>
