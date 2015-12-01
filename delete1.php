<?php
include_once('config.php');

if(isset($_POST['delete']))
{
    $roll_no=$_POST['roll_no'];
    $sql_query="DELETE FROM student WHERE Roll_No=".$roll_no;    
    mysql_query($sql_query);

}
?>


<html>
<head>
    <title>
        Delet
    </title>
</head>
<body>
  <div>
   <form  method="post">
    <table align="centre" border="1px">
        <tr>
            <td>Roll_No</td>
            <td><input type="number" name="roll_no"></td>
        </tr>
       
        <tr>
             <td><input type="submit" name="delete" value="Delete"></td>
        </tr>
    </table>
    </form>
    </div>
 </body>
</html>