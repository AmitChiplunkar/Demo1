<?php
include_once 'config.php';
if(isset($_GET['roll_no']))
{
	$sql_query="SELECT * FROM student WHERE Roll_No=".$_GET['roll_no'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['update']))
{
	// variables for input data
	 $roll_no=$_POST['roll_no'];
    $name=$_POST['name'];
    $semester=$_POST['semester'];
    $marks=$_POST['marks'];
    $address=$_POST['address'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE student SET Roll_No='$roll_no',Name='$name',Semester='$semester',Marks='$marks',Address='$address' WHERE Roll_No=".$_GET['roll_no'];
    
  //   $sql_query= "INSERT INTO student(Roll_No,Name,Semester,Marks,Address) values('$roll_no','$name','$semester','$marks','$address')";
   // mysql_query($sql_query);
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{m		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td>Roll_NO:<input type="integer" name="roll_no" placeholder="R_No" value="<?php echo $fetched_row['Roll_No']; ?>" required /></td>
    </tr>
    <tr>
    <td>Name: <input type="text" name="name" placeholder=" Name" value="<?php echo $fetched_row['Name']; ?>" required /></td>
    </tr>
    <tr>
    <td>Semester: <input type="text" name="semester" placeholder="semester" value="<?php echo $fetched_row['Semester']; ?>" required /></td>
    </tr>
     <tr>
    <td>Marks: <input type="text" name="marks" placeholder="marks" value="<?php echo $fetched_row['Marks']; ?>" required /></td>
    </tr>
    <tr>
    <td> Address: <input type="text" name="address" placeholder="address" value="<?php echo $fetched_row['Address']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>