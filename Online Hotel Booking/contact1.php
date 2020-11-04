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
            $query = "INSERT INTO contact1(name, address, email, phone, message) VALUES('$name','$address','$email','$phone','$message')";
            $insertcontact = $db->insert($query);
            if ($insertcontact) {
                $msg = "<span class='success'>Message sent successfully</span>";
            } else{
                $error = "<span class='error'>Message not sent</span>";
            }
        }
    }
?>				
				
				
				
				
					<form action="" method="POST">
						<p><b>Name</b></p>
						<input type="text" id="name" name="name" placeholder="Your name..." required>
						<br>
						<p><b>Address<b/></p>
						<input type="text" id="address" name="address" placeholder="Address..." required>
						<br>
						<p><b>Email</b><p>
						<input type="text" name="email" placeholder="Enter Your Email..." required>
						<br>
						<p><b>Phone</b><p>
						<input type="text" name="phone" placeholder="Enter Your Phone Number..." required>
						<br>
						<p>Message<p>
						<textarea id="subject" name="message" placeholder="Write Your Messages..." style="height:200px"></textarea>
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