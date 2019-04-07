<?php

include "header.php";
include "menu.php";
// var_dump($_POST);

//     echo "yes";
// }
// else
// {
// echo "no";
// }
?>
<td>
<form action="formprocess.php" method="post">
<table>
    <tr>
        <td> نام</td>
        <td>
        <input type="text" name="firstname">
        </td>
    </tr>
    <tr>
        <td> نام خانوادگی</td>
        <td>
        <input type="text" name="lastname">
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit"  name="submit" value="ارسال">
</td>
    </tr>
</table>

</form>
 </td>
<?php 
include "footer.php";
?>