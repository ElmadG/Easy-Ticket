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

	$total_amount=$_POST['amount'];
	$passanger_name=$_POST['psn'];
	$nationality=$_POST['country'];
	$mpesa_code=$_POST['mc'];
	$mobile_no=$_POST['mn'];
	$email_address=$_POST['email'];
	$captcha_code=$_POST['ec'];



	
	$sql ="INSERT INTO payment_form(total_amount,passanger_name,nationality,mpesa_code,mobile_no,email_address,captcha_code)
	       VALUES('$total_amount','$passanger_name','$nationality','$mpesa_code','$mobile_no','$email_address','$captcha_code')";

	if(!mysqli_query($con,$sql))
	{
		echo "Payment Not Recieved";
		}
	else
	{
		echo "Your Payment Was Successful";
		}
	header("refresh:60;url=e_main.html")

?>