<?php
session_start();
if(isset($_SESSION['error']))
{echo $_SESSION['error'];
unset($_SESSION['error']);
}
if(!isset($_SESSION['user']))
{
   $_SESSION['error'] = " باید ابتدا لوگین نمایید";
    header('location:loginform.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <table border="1" align=center>
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>style</td>
                <td><select name="style" >
                    <option value="classic">classic</option>
                    <option value="impressionism">impressionism</option>
                    <option value="abstract">abstarct</option>
                </select></td>
            </tr>
            <tr>
                <td> upload image :</td>
                <td>  
                          <input type="file" name="pic">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                            <input type="submit" name="submit" value="send">
                </td>
            </tr>
        </table>
       
        

    </form>
</body>
</html>