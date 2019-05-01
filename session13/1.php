<?php
session_start();
var_dump($_SESSION);
 $_SESSION['firstname'] = "javad";
echo $_SESSION['age'];
echo $_SESSION['firstname'];

// unset($_SESSION['age']);
session_destroy();
?>