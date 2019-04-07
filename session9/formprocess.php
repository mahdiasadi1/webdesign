<?php
var_dump($_POST);
if(isset($_POST["submit"]))
{
// echo "yes";
echo  $_POST['firstname'] . $_POST['lastname'];
}
else{
   header('location:form.php');
}
?>