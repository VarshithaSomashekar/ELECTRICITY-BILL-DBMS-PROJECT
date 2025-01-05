<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'link.php';?>
<style>
	body{
	
	background:linear-gradient(120deg,#2980b9,#8e44ad);
	font-size: 15px;
	font-weight: 700;
}
    
		table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
    font-family: 'Josefin Sans', sans-serif;
    font-size: '25px';
  background-color: #96D4D4;
}
input[type="submit"]{
	width: 20%;
	height: 25px;
	border: 1px solid;
	background: #96D4D4;
	border-radius : 25px;
	font-size: 15px;
	color: #000;
	font-weight: 700;
	cursor: pointer;
	outline:none;
}

input[type="submit"]: hover{
	border-color: #96D4D4;
    transition : .5s;
}
	</style>


</head>
<body>
	<div class = "main-div">
		<h1> Customer Details</h1>
	<div class ="center-div">
		<div class="table-responsive">
			<table >
				<thead>
					<tr>
						<th >Name</th>
						<th >Address</th>
						<th >State</th>
						<th >City</th>
						<th >Pincode</th>
                        <th >Phone_no</th>
                        <th >sex</th>
                        <th >email_id</th>
                        <th >password</th>
                        <th >cust_id</th>
                        
						
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
                    $email_id = $_POST['email_id'];
                    $password = $_POST['password'];
					$selectquery = "select * from customer where email_id='$email_id' and password='$password' ;";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						<td><?php echo $res['cust_name']; ?></td>
						<td><?php echo $res['address']; ?></td>
						<td><?php echo $res['state']; ?></td>
						<td><?php echo $res['city']; ?></td>
						<td><?php echo $res['pincode']; ?></td>
                        <td><?php echo $res['phone_no']; ?></td>
                        <td><?php echo $res['sex']; ?></td>
                        <td><?php echo $res['email_id']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><?php echo $res['cust_id']; ?></td>
                        
						<!--<td><i class="fa fa-edit" aria-hidden="true"></i></td>
						<td><i class="fa fa-trash" aria-hidden="true"></i></td>-->
					</tr>
<?php
}
?>
					
				</tbody>

			</table>
		</div>
        <form action ="billinfo.php" method="post">
        <div class="txt_field">
        <label>cust_id</label>
        <span></span>
		<input type="text" name="cust_id">
	</div>
    <input type="submit" value="VIEW BILL">
    <form action ="logout.php" method="post">
        <input type="submit" value="LOGOUT">
	</div>
	</div>
</body>
</html>