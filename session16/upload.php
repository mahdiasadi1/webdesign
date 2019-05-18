<?php
session_start();
var_dump($_FILES);
if(isset($_POST['submit']))
{
$filename = $_FILES['pic']['name'];
echo " name file = " .$filename;
$ext = pathinfo($filename,PATHINFO_EXTENSION);
$allowed_exts = ['jpg','jpeg','png','gif'];
if(in_array($ext,$allowed_exts))
{
$name = pathinfo($filename,PATHINFO_FILENAME);
echo " ext = " . $ext ."  name = ".$name;
$fullname = $name . time() . "." . $ext;
echo " <br> fullname =  " . $fullname;
$destination = "uploads/".$fullname;
$name = $_POST['name'];
$style =$_POST['style'];
move_uploaded_file($_FILES['pic']['tmp_name'],$destination);
$link = mysqli_connect('localhost','root','','exhibition');
mysqli_set_charset($link,'utf8');
$query = "insert into paintings (id,name,style,image) 
values(null,'$name','$style','$fullname')";
$result=mysqli_query($link,$query);
if(!$result)
{
 echo mysqli_error();
}
else{
    header('location:paintings.php');
}
}
else {
    $_SESSION['error'] = " لطفا یک عکس آپلود نمایید ";
    header('location:form.php');
}
}
else {
    header('location:form.php');
}
?>
