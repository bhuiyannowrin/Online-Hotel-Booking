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

			<div class="mid1">
				<h3>WELCOME TO Online Hotel Booking</h3>
			</div>
			<div class="mid">
				<img src="images/p1.jpg" class="m" id="1">
				<img src="images/p2.jpg" class="m" id="2">
				<script>
				var i=0;
				function x()
				{
					if(i==0)
					{
						document.getElementById('1').style.display='block';
						document.getElementById('2').style.display='none';

						i=1;
					}
					else
					{
						document.getElementById('1').style.display='none';
						document.getElementById('2').style.display='block';
						i=0;
					}
					setTimeout(function(){x();},2000);
		
				}
				x();

			</script>
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>