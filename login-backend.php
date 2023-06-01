<?php 

if(!isset($_SESSION)){
    session_start();
}
include_once("./connections/connection.php");
$con = connection();



if(isset($_POST["login"])){

    $_SESSION['message1'] = "<div id='importAlert' class='alert alert-info text-center' role='alert'>Welcome Admin!!</div>";
   
    $username = $_POST["username"];
    $password = $_POST["password"];
    
   $sql = "SELECT * FROM alumni_users WHERE username = '$username' AND password = '$password'";
   
   $user = $con->query($sql) or die ($con->error);
   $row = $user->fetch_assoc();
   $total = $user->num_rows;

    if($total > 0){
        $_SESSION["userLogin"] = $row["username"];
        $_SESSION["Access"] = $row["access"];
        echo header("Location: Dashboard.php");
    } else{
        echo '<script>alert("Incorrect Username or Password!")</script>';
    }
    
    
}
?>