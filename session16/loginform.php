<?php
session_start();
if(isset($_SESSION['error']))
 {echo $_SESSION['error'];
unset($_SESSION['error']); 
}
?>
<form action="login.php" method="POST">
<table border=1 align=center>
    <tr>
        <td>user</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit"  value="log in" name="login"></td>
        
    </tr>
</table>
</form>