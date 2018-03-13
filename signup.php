<?php
	$con=mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "Not connected to the server";
	}
	if(!mysqli_select_db($con,'easy_ticket'))
	{
		echo "Database Not Selected";
	}

	$Forename=$_POST['fname'];
	$Surname=$_POST['sname'];
	$Email=$_POST['email'];
	$Phone=$_POST['phone'];
	$Day=$_POST['dd'];
	$Month=$_POST['mm'];
	$Year=$_POST['yyyy'];
	$Username=$_POST['uname'];
	$Password=$_POST['pword'];

	$sql ="INSERT INTO signup (Forename,Surname,Email,Phone,Day,Month,Year,Username,Password)
	       VALUES('$Forename','$Surname','$Email','$Phone','$Day','$Month','$Year','$Username','$Password')";

	if(!mysqli_query($con,$sql))
	{
		echo "Account Not Created";
		}
	else
	{
		echo "Account Created";
		}
	header("refresh:1;url=e_main.html")

?>