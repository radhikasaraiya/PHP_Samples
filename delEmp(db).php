<?php
include 'database.php';

$qry="delete from empinfo where id=".$_REQUEST['id'];
$res=mysqli_query($con,$qry);

if($res==1)
	header("LOCATION:showEmp(db).php");
?>
