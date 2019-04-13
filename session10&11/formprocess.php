<?php
if(isset($_POST["submit"]))
// echo $_POST["price"];
{
    var_dump($_POST);
   $price = $_POST['price'];
   $name = $_POST['name'];
   $type= $_POST['type'];
    $link= mysqli_connect("127.0.0.1","root","","store");
    mysqli_set_charset($link,"utf8");
    $query = "insert into chocolates (id,price,type,name)
     Values (null,'$price','$type','$name')";
     echo $query; 
   $result= mysqli_query($link,$query); 
  

}
else 
 header("location:form.html");
?>