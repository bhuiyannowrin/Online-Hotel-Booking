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

        <?php

            $db= new Database();
            if(isset($_POST['submit'])){
                $fullname = mysqli_real_escape_string($db->link, $_POST['fullname']);  
                $email = mysqli_real_escape_string($db->link, $_POST['email']);  
                $phone = mysqli_real_escape_string($db->link, $_POST['phone']);  
                $username = mysqli_real_escape_string($db->link, $_POST['username']);
				$password = mysqli_real_escape_string($db->link, $_POST['password']);
				
                if($fullname==''|| $email==''|| $phone==''|| $username==''|| $password==''){
                    $error="Field must not be Empty !!";
                }else{
                    $query = "INSERT INTO register(fullname,email,phone,username,password) Values('$fullname','$email','$phone','$username','$password')";
                    $create = $db->insert($query);
					header('location:home.php');
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
			<div class="s1">
				<h3>Registered With Us</h3>
			</div>
			<div class="smid">
				<div class="s2">
					<form action=""  method="post">
						<label for="fname"><b>Name</b></label><br>
						<input type="text" id="fullname" name="fullname" placeholder="Your name..." required>
						<br>
						<label for="email"><b>Email Address</b></label><br>
						<input type="text" name="email" placeholder="Enter Your Email..." required>
						<br>
						<label for="phone"><b>Phone</b></label><br>
						<input type="text" name="phone" placeholder="Enter Your Phone Number..." required><br>
						<label for="username"><b>Username</b></label><br>
						<input type="text" id="username" name="username"required>
						<br>
						<label for="password"><b>Password</b></label><br>
						<input type="password" name="password"required>
						<br><br>
						<input type="submit" name="submit" value="Sign Up">
					</form>
				</div>
				
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>