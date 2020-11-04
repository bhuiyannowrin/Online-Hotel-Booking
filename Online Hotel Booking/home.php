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
					<li><a href="home.php">HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="fac.php">FACILITIES</a></li>
					<li><a href="ga.php">GALLERY</a></li>
					<li><a href="admin.php">ADMIN</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
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