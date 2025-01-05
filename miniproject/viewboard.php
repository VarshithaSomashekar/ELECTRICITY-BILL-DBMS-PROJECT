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
		<h1>BOARDS</h1>
	<div class ="center-div">
		<div class="table-responsive">
        <table >
				<thead>
					<tr>
						
                        <th >BOARD ID</th>
                        <th >BOARD NAME</th>
                        
						
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
                    
                    $selectquery = "SELECT * FROM elec_board";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						
                        
                        <td><?php echo $res['eboard_id']; ?></td>
                        <td><?php echo $res['board_name']; ?></td>
                        
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
    <div>
    <form action ="viewtariff.php" method="post">
        <input type="submit" value="TARIFF">
</div>
	
	</div>
	</div>
</body>
</html>