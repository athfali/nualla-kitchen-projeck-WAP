<?php

session_start();
unset($_SESSION['loggedIn']);
unset($_SESSION['id']);
unset($_SESSION['name']);
    
return header("location:/nualla");

session_destroy();

header("location:home.php?signout=sukses");

?>