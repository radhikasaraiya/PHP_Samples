<?php
$con=mysqli_connect("localhost","root","","bscit6"); //connection string 
if (!$con)
{
	die("Connection failed".mysqli_error());
}
else 
{
	echo "Connected"; 
}

?>