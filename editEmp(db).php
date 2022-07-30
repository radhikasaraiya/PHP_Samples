<?php
include 'database.php';
$car=array("Surat","Ahemdabad","Vadodara","Mumbai");

$qry="select *from empinfo where id=".$_REQUEST['id'];
//echo $qry;
$res=mysqli_query($con,$qry);
$row=mysqli_fetch_array($res);

if(isset($_POST['s2']))
{
	$eid=$_REQUEST['id'];
	$ename=$_POST['enm'];
	$esal=$_POST['sal'];
$d=$_POST['deptcombo'];

if ($_FILES['upload_file']['size']>0)
{
$filetmppath=$_FILES['upload_file']['tmp_name'];
$dest="./upload/".$_FILES['upload_file']['name'];
echo $dest;
move_uploaded_file($filetmppath, $dest);
$upqry="update empinfo set name='$ename',salary=$esal,upload_pic='$dest',dept_id=$d where id=$eid";
//echo $upqry;
	 $u=mysqli_query($con,$upqry);
}
else
{
$upqry="update empinfo set name='$ename',salary=$esal,dept_id=$d where id=$eid";
//echo $upqry;
	 $u=mysqli_query($con,$upqry);

}
 if($u==1)
  	header('Location:showEmp(db).php');
 }
?>
<form method="post" enctype="multipart/form-data">
Id:<input type="number" name="eid" readonly value='<?php echo $row[0]; ?>'><br><br>
Name:<input type="text" name="enm" value='<?php echo $row[1]; ?>'><br><br>
City:    <select name="city">
			<option>--Select City--</option>
			<?php 
				foreach ($car as $dt) {
					if ($dt==$row[2])
					{
					?>
				<option selected value="<?php echo $dt ;?>"><?php echo $dt ;?>
				</option>
					
			<?php					
				}
				else  {
					?>
						<option  value="<?php echo $dt ;?>"><?php echo $dt ;?>
				</option>
				<?php
					}	
			}
			?>
		
		</select><br><br>

Gender  :<input type="radio" name="gender" value="male" <?php if ($row[4]=='male') echo"checked"; ?> >Male

<input type="radio" name="gender" value="female" <?php if ($row[4]=='female') echo"checked"; ?> >Female<br><br>

Select Shift :
<input type="checkbox" name="c1" value="Day" 
<?php if (strpos($row[3],'Day')>=0) echo"checked"; ?>>Day
<input type="checkbox" name="c1" value="Night" 
<?php if (strpos($row[3],'Night')>=0) echo"checked"; ?>>Night 
	<br><br>

Salary : <input type="number" name="sal" value='<?php echo $row[5]; ?>'><br><br>

Picture:<input type="file" name="upload_file" value='<?php echo $row[6]; ?>'>
<img src='<?php echo $row[6]; ?>'height="50" width="50"><br>
Dept:<select name="deptcombo" value="<?php echo $row[7]; ?>">
	<option>---Select Dept---</option>
	<?php
	 	$dq="select *from depttb";
	 	$dres=mysqli_query($con,$dq);

	 	while($drow=mysqli_fetch_array($dres))
	 	{
	 	?>
	 	<option value="<?php echo $drow[0]; ?>" 
	 		<?php if($drow[0]==$row[7]) 
	 					echo "selected";
	 		 ?> > <?php  echo $drow[1]; ?></option>	
	 	<?php	 
	 	}
	 	?>
	</select><br>
<input type="submit" name="s2" value="Update">
</form>