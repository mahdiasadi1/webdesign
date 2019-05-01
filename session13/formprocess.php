<?php
session_start();
if(isset($_POST['submit']))
{
    if (empty($_POST['firstname']))
    {
        $_SESSION['error'] = " باید نام خود را وارد نمایید";
        header('location:form.php');
    }
    else 
    {
        echo $_POST['firstname'];
    }
}else{
    $_SESSION['error'] = " باید ابتدا فرم را پر نمایید ";
    header('location:form.php');
}
?>