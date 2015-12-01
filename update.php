<?php
include_once 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div>
     
    <form method="get" action="update_data.php">
    
    <table align="center">
    <tr>
    <td>Enter Roll No.<input type="text" name="roll_no" placeholder="Roll_No" ></td>
    </tr>
    <tr>
     <td><button type="submit" name="update"><strong>Edit</strong></button>
    </td>
    </tr>
    </table>
    </form>
    
   </div>
   
</body>

</html>