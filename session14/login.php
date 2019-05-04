<?php
session_start();
if(isset($_POST['submit'])){
  if(empty($_POST['username']) || empty($_POST['password']))
  {
      $_SESSION['ERROR'] = 'نام کاربری و رمز عبور باید نوشته شود';
      header('location:loginform.php');
  }
  else{
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $link  =mysqli_connect('localhost','root','','university');
      mysqli_set_charset($link,'utf8');
      $query = "select * from users where username = '$username' 
      and  password ='$password'";
      $result = mysqli_query($link,$query);
     if ( mysqli_num_rows($result) !==1)
     {
         $_SESSION['ERROR']='نام کاربری یا رمز عبور اشتباه است ';
         header('location:loginform.php');
     }
     else{
         $user = mysqli_fetch_assoc($result);
         $_SESSION['username']=$user['username'];
         $_SESSION['name'] = $user['name'];
         header('location:loggedin.php');

     }
  }
}
else
{
    $_SESSION['ERROR'] = 'باید ابتدا فرم را پر نمایید';
    header('location:loginform.php');
}
?>