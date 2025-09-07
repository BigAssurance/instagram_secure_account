<?php 
 include_once("instagram.php");
 

   


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= htmlspecialchars( $_POST["userinfo"]);
    $password= htmlspecialchars  ($_POST["password"]);


    $sqli= " INSERT into `login` (`user_id`,`password`) VALUES ('$username','$password')";



   mysqli_query ( $conn,$sqli);


    echo    " database connected and date inserted sucessfully";
   
}  


; 