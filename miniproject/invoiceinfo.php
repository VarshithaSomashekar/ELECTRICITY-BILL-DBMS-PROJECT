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
		<h1>Invoice</h1>
	<div class ="center-div">
		<div class="table-responsive">
        <table >
				<thead>
					<tr>
						<th >INVOICE ID</th>
                        <th >EBOARD ID</th>
                        <th >ACCOUNT NUMBER</th>
                        <th >TARIFF ID</th>
                        <th >READING DATE</th>
                        <th >METER NUMBER</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
                    $meter_number = $_POST['meter_number'];
                    $selectquery = "select * from invoice where meter_number='$meter_number' ;";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						
                        
                        <td><?php echo $res['invoice_id']; ?></td>
                        <td><?php echo $res['eboard_id']; ?></td>
                        <td><?php echo $res['account_no']; ?></td>
                        <td><?php echo $res['tariff_id']; ?></td>
                        <td><?php echo $res['reading_date']; ?></td>
                        <td><?php echo $res['meter_number']; ?></td>
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
	<form action ="logout.php" method="post">
        <input type="submit" value="LOGOUT">
	</div>
	</div>
</body>
</html>