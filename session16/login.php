<?php
session_start();
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $link = mysqli_connect('localhost','root','','exhibition');
    mysqli_set_charset($link,'utf8');
    $query = "select username from users where username = 
    '$username' and password= '$password'";
    $result=mysqli_query($link,$query);
     if(mysqli_num_rows($result) ==1)
     {
        $user= mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user['username'];
        header('location:paintings.php');
     }
     else{
         $_SESSION['error'] = 'نام کاربری ویا پسورد اشتباه است ';
         header('location:loginform.php');
     }
}
    else
    {
        $_SESSION['error'] = 'ابتدا با ید لوگین کنید';
        header('location:loginform.php');
    }
?>