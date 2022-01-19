<?php

if(!isset($_SESSION['loggedIn'])) {
    return header("location:../nualla/login.php");
}

?>