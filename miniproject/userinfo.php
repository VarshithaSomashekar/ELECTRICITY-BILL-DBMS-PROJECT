<?php
$con = mysqli_connect('localhost','root');
if($con)
{
	$message1 = "successfully registered.";
	$message2 = "go to login page to view details.";

// Display the messages with line breaks
	echo $message1 . "<br>";
	echo $message2 . "<br>";
	
}
else{
	echo "no connection";
}
mysqli_select_db($con , 'newebille');

#$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$phone_no = $_POST['phone_no'];
$sex = $_POST['sex'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$query = "insert into customer ( address, city, cust_name, email_id, password, phone_no, pincode, sex, state) 
values ('$address','$city', '$cust_name','$email_id', '$password','$phone_no', '$pincode','$sex','$state');";
mysqli_query($con, $query);
?>