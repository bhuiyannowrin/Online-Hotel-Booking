<!DOCTYPE php>
<php>
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
						<li><a href="home1.php">HOME</a></li>
						<li><a href="about1.php">ABOUT US</a></li>
						<li><a href="fac1.php">FACILITIES</a></li>
						<li><a href="ga1.php">GALLERY</a></li>
						<li><a href="contact1.php">CONTACT US</a></li>
						<li><a href="ga1.php">ROOMS</a>
							<ul>
								<li><a href="s.php">Single</a></li>
								<li><a href="d.php">Double</a></li>
								<li><a href="t.php">Triple</a></li>
							</ul>
						</li>
						<li><a href="#">MY ACCOUNT</a>
							<ul>
								<li><a href="myaccount.php">Profile</a></li>
								<li><a href="mbooking.php">My Booking</a></li>
								<li><a href="changepass.php">Change Password</a></li>
								<li><a href="home.php">Logout</a></li>
							</ul>
						</li>
	
					</ul>
	
				</div>
			</nav>
			<div class="mid22">
				<div class="mitext">
				
					<?php

						include("include/config.php");
						include("include/Database.php");
						$db= new Database();
						$sql1="select * from booking";
						$result = mysqli_query($db->link,$sql1);
					?>
					<?php 
						//DBMS CONNECTION
					
						$sql="select * from bookingconfirm";
						$res=mysqli_query($db->link,$sql);
						echo '<table border="2">';
						echo '<caption>';
						echo '<h3 style="text-align:center; ">Confirmation messages</h3>';
					    echo '</caption>';
						echo '<tr>';
							echo '<th>'.'Room Type & Number of Rooms : '.'</th>';
							echo '<th>'.'Status'.'</th>';
						echo '</tr>';
						while($arr=mysqli_fetch_array($res))
						{
							echo '<tr>';
							echo '<td>'.$arr['type'].'</td>';
							echo '<td>'.' Your Room Booking is Confirmed'.'</td>';
							echo '</tr>';
						}
						echo '</table>';
					 ?>
				</div>
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
				
			</div>
			
	</body>
	
</php>