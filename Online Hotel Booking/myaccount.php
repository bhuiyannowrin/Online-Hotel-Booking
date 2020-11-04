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
			<div class="hh1">
				<div class="hh2">
					<h1>Online Hotel Booking</h1>
				</div>
				<div class="hh3">
					<h2>Welcome Tania Nowrin</h2>
				</div>
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
			<div class="myidd1">
				<div class="htitle">
					<div class="ht1">
						<p>Registration Form</p>
					</div>
					<div class="ht2">
						<p>Profile of Tania Nowrin</p>
					</div>
				</div>
				<div class="ddtext">
					<div class="ddt1">
						<b>Name </b><br><br>
						<b>Mobile </b><br><br>
						<b>Email </b><br><br>
						<b>Date Of Birth </b><br><br>
						<b>Address Line 1 </b><br><br>
						<b>Address Line 2 </b><br><br>
						<b>City </b><br><br>
						<b>Country </b><br><br>
						<b>Image </b><br><br>
					</div>
					<div class="ddt2">
						<input type="text" id="mname" name="mtname" placeholder="Your name..." required>
						<br>
						<input type="text" id="mob" name="mob"pattern="[0-9]{5}-[0-9]{6}">
						<br>
						<input type="email" id="e2" name="e2">
						<br>
						<input type="date" id="d1" name="d1">
						<br>
						<input type="text" id="ad1" name="ad1">
						<br>
						<input type="text" id="ad2" name="ad2">
						<br>
						<input type="text" id="c1" name="c2">
						<br>
						<input type="text" id="c2" name="c2">
						<br>
						<input type="text" id="c3" name="c3">
						<br>
						<input type="file" value="mfile">
						<br>
						<input type="submit" value="Submit">
						<input type="reset" value="Reset">
					</div>
				</div>
				<div class="ddtext1">
				</div>
			</div>
			<div class="footer">
					<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>