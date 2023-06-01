<?php

include_once("./connections/connection.php");
$con = connection();

if(isset($_POST["delete1"])){

    $id = $_POST["ID"];
    $sql = "DELETE FROM files WHERE id = '$id'";
    $con->query($sql) or die ($con->error);
    echo header ("Location: thesis.php");

}     