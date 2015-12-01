<?php
include_once('config.php');
include_once('delete.php');
?>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>
        DEMO1
    </title>
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
   
   <div>
    <table align="centre" border="1px">
        <tr>
            <td><button name="add" onclick="location.href='add_data.php';" >Add</button></td>
            <td><button name="update" onclick="location.href='update.php';">Update</button></td>
            <td><button name="delete" onclick="location.href='delete.php';">Delete</button></td>
            <td><button name="display" >Display</button></td>
        </tr>
    </table>
    </div>
  
    
    <div id="body">
	<div id="content">
    <form method="post">
    <table align="center" border="1px">
     <tr>
        <th>Roll Number</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Semester</th>
        <th>Devices</th>
        <th>Marks</th>
        <th>Address</th>
        <th>Profile_Pic</th>
        <th>Options</th>
      </tr>
      
    <?php
	$sql_query="SELECT * FROM student";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td> <img src="<?php echo $row[7]; ?>"/></td>
            <td><button type="submit" name="del" value="<?php echo $row[0];?>">delete</button>
            <a  href="update_data.php?roll_no=<?php echo $row[0];?>">edit</a>
            </td>

            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="5">No Data Found !</td>
        </tr>
        <?php
	}
	?>
    </table>
    </form>
    </div>
</div>
   
    
    
    
        
 </body>
</html>