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
				<div class="midpic1">
					<div class="commid1">
					</div>
				
				</div>
				<div class="mitext">
					<div class="tet1">
						<div class="t11">
						<p>A Single room is for one person and contains a single bed and will usually be quite small.</p>
						<b>Max Adult: 3</b><br>
						<b>Max Child: 2</b><br>
						<b>No.Of Beds:2</b><br>
						<b>Room Facilities: 24-hours room service, free wireless internet access</b><br>
						<b>Price : 1500 </b><br>
						<br>
						<button onclick="myf1()">Booking Pending</button>
						<script>
							function myf1(){
							location.replace("tbooking.php");
							}
						</script>
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