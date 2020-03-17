<?php
session_start();
if(isset($_SESSION["UserID"])){
    echo "Login OK";
} else {
    header("location:./login.php");
}
?>