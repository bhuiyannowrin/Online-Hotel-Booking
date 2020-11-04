<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Online Hotel Booking</title>
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1>Online Hotel Booking</h1>
			</div>
			<nav>
				<div id="nav">
				<ul>
					<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="fac.php">FACILITIES</a></li>
					<li><a href="ga.php">GALLERY</a></li>
					<li><a href="">ADMIN</a></li>
					<li><a href="contactadmin.php">CONTACT MESSAGES</a></li>
					<li><a href="home.php">LOGOUT</a></li>
				</ul>
			</div>
			</nav>
			<div class="lmid">
		<form class="rtable" action="adminmyprofile.php" method="post" enctype="multipart/form-data">
		<table border="2">
		<caption style="font-size:30px; color:black;">
			Panding Booking List
		</caption>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Mobile</th>
			<th>Type</th>
			<th>Status Action</th>
		</tr>
			
			<?php

			include("include/config.php");
            include("include/Database.php");
			$db= new Database();
			$sql1="select * from booking";
			$result = mysqli_query($db->link,$sql1);
			while($array=mysqli_fetch_array($result))
			{
			?>
				<tr>
					<td><?php echo $array['name']?></td>
					<td><?php echo $array['address']; ?></td>
					<td><?php echo $array['phone']; ?></td>
					<td><?php echo $array['type']; ?></td>
					<td>
						<a class="buttom" href="bookac.php?id=<?php echo $array['id'];?>">Accept</a> 
					</td>
				</tr>

			<?php
			}
			?>
		</table>
		</form>
				<?php 
						//DBMS CONNECTION
					
						$sql="select * from bookingconfirm";
						$res=mysqli_query($db->link,$sql);
						echo '<table border="2">';
						echo '<caption>';
						echo '<h3 style="text-align:center; ">Confirmed Booking List</h3>';
					    echo '</caption>';
						echo '<tr>';
							echo '<th>'.'Name'.'</th>';
							echo '<th>'.'Phone'.'</th>';
							echo '<th>'.'Adress'.'</th>';
							echo '<th>'.'type'.'</th>';
							
						echo '</tr>';
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['name'].'</td>';
							echo '<td>'.$arr['phone'].'</td>';
							echo '<td>'.$arr['address'].'</td>';
							echo '<td>'.$arr['type'].'</td>';
							
							echo '</tr>';
						}
						echo '</table>';


					 ?>
			</div>
			<div class="footer">
			</div>
		</div>
	</body>
	
</html>