<?php

if(isset($_POST['del']))
{
    $roll_no=$_POST['del'];
    mysql_query("DELETE FROM student WHERE Roll_No=".$roll_no);    
}
?>