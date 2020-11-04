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
		<?php
			include("include/config.php");
            include("include/Database.php");
            
        ?>
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
			<div class="mid">
				<div class="contactmid">
				<?php
	
					$db= new Database();

					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$name = $_POST['name'];
						$address =$_POST['address'];
						$email =$_POST['email'];
						$phone  = $_POST['phone'];
						$message  =$_POST['message'];

						// $name = mysqli_real_escape_string($db->link, $name);
						// $address = mysqli_real_escape_string($db->link, $address);
						// $email = mysqli_real_escape_string($db->link, $email);
						// $phone  = mysqli_real_escape_string($db->link, $phone);
						// $message  = mysqli_real_escape_string($db->link, $message);

						$error = "";
						if (empty($name)) {
							$error = "Name must not be empty!";
						} elseif (empty($address)) {
							$error = "address must not be empty!";
						} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$error = "Invalid Email Address!";
						} elseif (empty($phone)) {
							$error = "Email must not be empty!";
						}elseif (empty($message)) {
							$error = "message must not be empty!";
						}else {
							$query = "INSERT INTO contact(name, address, email, phone, message) VALUES('$name','$address','$email','$phone','$message')";
							$insertcontact = $db->insert($query);
							if ($insertcontact) {
								$msg = "<span class='success'>Message sent successfully</span>";
							} else{
								$error = "<span class='error'>Message not sent</span>";
							}
						}
					}
				?>	
					<form action="contact.php" method="POST">
						<label for="name"><b>Name</b></label>
					
						<br>
						<input type="text" id="name" name="name" placeholder="Your name..." required>
						<br>
						<br>
						<label for="address"><b>Address<b/></label><br>
						<input type="text" id="address" name="address" placeholder="Address..." required>
						<br><br>
						<label for="email"><b>Email</b></label><br>
						<input type="text" name="email" placeholder="Enter Your Email..." required>
						<br><br>
						<label for="phone"><b>Phone</b></label><br>
						<input type="text" name="phone" placeholder="Enter Your Phone Number..." required>
						<br><br>
						<label for="message">Message</label><br>
						<textarea id="message" name="message" placeholder="Write Your Messages..." style="height:200px"></textarea>
						<br>
						<input type="submit" value="Send">
					</form>
				</div>
				
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>



















