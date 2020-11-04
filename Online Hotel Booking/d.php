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
		<?php
			include("include/config.php");
            include("include/Database.php");
            
        ?>

        <?php

            $db= new Database();
            if(isset($_POST['submit'])){
                $name = mysqli_real_escape_string($db->link, $_POST['name']);   
                $phone = mysqli_real_escape_string($db->link, $_POST['phone']);  
                $address = mysqli_real_escape_string($db->link, $_POST['address']);
				$roomtype = mysqli_real_escape_string($db->link, $_POST['roomtype']);
				
                if($name==''||  $phone==''|| $address==''|| $roomtype==''){
                    $error="Field must not be Empty !!";
                }else{
                    $query = "INSERT INTO booking(name,phone,address,type) Values('$name','$phone','$address','$roomtype')";
                    $create = $db->insert($query);
					header('location:dbooking.php');
                }
            }

        ?>
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
				<div class="midpic1">
					<div class="commid1">
						<img src="images/d.jpeg">
					</div>
				
				</div>
				<div class="mitext">
					<div class="tet1">
						<div class="t11">
						<p>A Single room is for two person and contains a single bed and will usually be quite small.</p>
						<b>Max Adult: 2</b><br>
						<b>Max Child: 1</b><br>
						<b>No.Of Beds:2</b><br>
						<b>Room Facilities: 24-hours room service, free wireless internet access</b><br>
						<b>Price : 1200 </b><br>
						<br>
						<form action="d.php" method="post">
							<label for="name"><b>Name</b></label><br>
							<input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
							<br>
							<label for="phone"><b>Phone</b></label><br>
							<input type="text" name="phone" placeholder="Enter Your Phone Number..." required>
							<br>
							<label for="address"><b>Address</b></label><br>
							<input type="text" name="address" placeholder="Full Address..." required>
							<br>
							<label for="roomtype"><b>Room Type</b></label><br>
							<input type="text" name="roomtype" placeholder="Double-2rooms" required>
							<br>
							<br>
							<input type="submit" name="submit" value="Book">
						</form>
						
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
				
			</div>
			
	</body>
	
</php>