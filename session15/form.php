<?php
session_start();
if(isset($_SESSION['error']))
{echo $_SESSION['error'];
unset($_SESSION['error']);
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
        upload image :
        <input type="file" name="pic">
        <br>
        <input type="submit" name="submit" value="send">

    </form>
</body>
</html>