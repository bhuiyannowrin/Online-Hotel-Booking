<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Home</title>
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
                $cusername = mysqli_real_escape_string($db->link, $_POST['username']);  
                $cpassword = mysqli_real_escape_string($db->link, $_POST['password']);  
                
                if($cusername==''|| $cpassword==''){
                    $error="Field must not be Empty !!";
                }else{
                    $query = "INSERT INTO login(username,password) Values('$cusername','$cpassword')";
                    $create = $db->insert($query);
					header('location:home1.php');
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
			<div class="lmid">
				<div class="s1">
				<h3>If you have an account with us, Please login</h3>
			</div>
				<div class="login">
					<form action="" method="post">
						<label for="username"><b>Username</b></label><br>
						<input type="text" id="username" name="username"required>
						<br>
						<br>
						<label for="password"><b>Password<b/></label><br>
						<input type="password" id="password" name="password"required>
						<br><br>
						<input type="submit" name="submit" value="Sign in">
						<div class="lr"><input type="checkbox" value="checkbox">Remember Me</div>
						<div class="lr"><a href=""><b>Forget Password?</b></a></div>
					</form>	
				</div>
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>