<?php
session_start();
unset($_SESSION["userLogin"]);
unset($_SESSION["Access"]);
echo header("Location: Login.php");
?>