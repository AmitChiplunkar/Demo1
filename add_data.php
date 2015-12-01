<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $roll_no=$_POST['roll_no'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $semester=$_POST['semester'];
    $devices=$_POST['devices'];
    $marks=$_POST['marks'];
    $address=$_POST['address'];
   // 
    print_r($_FILES);
    move_uploaded_file($_FILES['image']['tmp_name'],"images/".$_FILES['image']['name']);
    $profile="images/".$_FILES['image']['name'];

    /* *************************************************** */
    
  /*  function GetImageExtension($imagetype)
    {
      if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }*/
    //$imagename=$_FILES["image"]["name"]; 

//Get the content of the image and then add slashes to it 
//$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));
    

//Insert the image name and image content in image_table
//
    //$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

//mysql_query($insert_image);

    
    
    
    /* *************************************************** */
    
    $sql_query= "INSERT INTO student(Roll_No,Name,Gender,Semester,Device,Marks,Address,Profile_Picture) values('$roll_no','$name','$gender','$semester','$devices','$marks','$address','$profile')";
   // mysql_query($sql_query);
    
    if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Inserted Successfully ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Error Occured while Inserting Data');
		</script>
		<?php
	}
    
    

}
?>


<html>
<head>
    <title>
        Add
    </title>
</head>
<body>
  <div>
   <form enctype="multipart/form-data" method="post">
    <table align="centre" border="1px">
        <tr>
            <td>Roll_No</td>
            <td><input type="number" name="roll_no"></td>
        </tr>
        
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        
        <tr>
            <td >Gender</td>
            <td>
     	    <input type="radio" name="gender"
             <?php if (isset($gender) && $gender=="Female") echo "checked";?>
             value="Female">Female
            <input type="radio" name="gender"
             <?php if (isset($gender) && $gender=="Male") echo "checked";?>
             value="Male">Male
            </td>
        </tr>
        
        <tr>
            <td>Semester</td>
            <td>
                 <select name="semester" id="yourid">
                            <option value="">--select--</option> 
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>   
                            <option value="V">V</option>   
                </select>
           </td>
        </tr>
           
           
        <tr>
            <td>Devices</td>
            <td>
             <input type="checkbox" name="devices" value="Mobile">Mobile<br>
             <input type="checkbox" name="devices" value="Tablet">Tablet<br>
             <input type="checkbox" name="devices" value="Laptop">Laptop<br>
             <input type="checkbox" name="devices" value="Desktop">Desktop<br>
            </td>
        </tr>   
            
        <tr>
            <td>Marks</td>
            <td><input type="text" name="marks"></td>
        </tr>
        
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        
        <tr><td>Profile Picture</td>
            <td> <input type="file" name="image" id="fileToUpload"></td>
        </tr>
        
        
        <tr>            
              
             <td><input type="submit" name="submit" value="ADD"></td>
        </tr>
        
        
    </table>
    </form>
    
    
    </div>
 </body>
</html>