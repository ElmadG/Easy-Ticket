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
	$Town=$_POST['town'];
	$Subject=$_POST['subject'];
	
	$sql ="INSERT INTO contact_us(Forename,Surname,Town,Subject)
	       VALUES('$Forename','$Surname','$Town','$Email')";

	if(!mysqli_query($con,$sql))
	{
		echo "Message Not Delivered";
		}
	else
	{
		echo "Message Delivered";
		}
	header("refresh:1;url=e_main.html")

?>