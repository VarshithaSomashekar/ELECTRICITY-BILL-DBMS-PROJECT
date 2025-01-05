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
    font-size: '18px';
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
		<h1> Bills</h1>
	<div class ="center-div">
		<div class="table-responsive">
        <table >
				<thead>
					<tr>
						<th >meter_number</th>
                        <th >acc_id</th>
                        <th >cust_id</th>
                        <th >monthly_units</th>
                        <th >amount_per_unit</th>
                        <th >total_amount</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
                    
                    $selectquery = "select * from billing ;";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						
                        <td><?php echo $res['meter_number']; ?></td>
                        <td><?php echo $res['acc_id']; ?></td>
                        <td><?php echo $res['cust_id']; ?></td>
                        <td><?php echo $res['monthly_units']; ?></td>
                        <td><?php echo $res['amount_per_unit']; ?></td>
                        <td><?php echo $res['total_amount']; ?></td>
						<!--<td><i class="fa fa-edit" aria-hidden="true"></i></td>
						<td><i class="fa fa-trash" aria-hidden="true"></i></td>-->
					</tr>
<?php
}
?>
					
				</tbody>

			</table>
		</div>
    </div>
	<form action ="display.php" method="post">
        <input type="submit" value="CUSTOMERS">
	
	</div>
	</div>
</body>
</html>