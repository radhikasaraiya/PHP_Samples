<?php
include 'database.php';
$car=array("Surat","Ahemdabad","Vadodara","Mumbai");
if(isset($_POST['s1']))
{
	$n=$_POST['enm'];
	$c=$_POST['city']; 
	$g=$_POST['gender']; 
	$sh1=$_POST['c1'];
	$sh1=implode($sh1, ",");
	$sal=$_POST['sal'];
	$d=$_POST['deptcombo'];

$filetmppath=$_FILES['upload_file']['tmp_name'];
$dest="./upload/".$_FILES['upload_file']['name'];
if(move_uploaded_file($filetmppath, $dest))
{
	echo "File uploaded successfully<br>";
}
else
{
	echo "Upload failed <br><br>";
}
$i="insert into empinfo(id,name,city,gender,shift,salary,upload_pic,dept_id)values(NULL,'$n','$c','$g','$sh1',$sal,'$dest',$d)";

echo $i;
$record=mysqli_query($con,$i)or die(mysqli_error());

if($record==1)
		header('Location:showEmp(db).php');
			
else
	echo "error.";
mysqli_close($con);
}
?>
<html>
<body>
	<h3>Employee Registration Form </h3>
	<form method="post" enctype="multipart/form-data">
Name:<input type="text" name="enm"><br><br>
City:    <select name="city">
			<option>--Select City--</option>
			<?php 
				foreach ($car as $dt) {
					?>
				<option value="<?php echo $dt ;?>"><?php echo $dt ;?>
				</option>
					
			<?php					
				}

			?>
			
		</select><br><br>

Gender  :<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female<br><br>

Select Shift :<input type="checkbox" name="c1[]" value="Day">Day
			<input type="checkbox" name="c1[]" value="Night">Night 	<br><br>

Salary : <input type="number" name="sal"><br><br>
Upload Picture :<input type="file" name="upload_file"><br><br>

Dept:<select name="deptcombo">
	<option>--Select Dept--</option>
	<?php  
	$qury="select *from depttb";
	$res=mysqli_query($con,$qury);

	while($row=mysqli_fetch_array($res))
	{
	 ?>
<option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?> </option>
<?php
	}
?>
</select>
<br><br>
<input type="submit" name="s1" value="Insert" >
</form>
</body>
</html>