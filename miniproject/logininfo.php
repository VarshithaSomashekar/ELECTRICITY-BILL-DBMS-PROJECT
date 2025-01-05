<?php
$con = mysqli_connect('localhost','root');
if($con)
{
	echo "connection successful";
}
else{
	echo "no connection";
}
mysqli_select_db($con , 'newebille');

$email_id = $_POST['email_id'];
$password = $_POST['password'];
$query = "select * from customer where email_id='$email_id' and password='$password';";
mysqli_query($con, $query);
$res= mysqli_fetch_array($query)

?>