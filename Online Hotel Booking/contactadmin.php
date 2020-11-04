<?php
	include("include/config.php");
	include("include/Database.php");
	
?>

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
					<li><a href="myadmin.php">ADMIN</a></li>
					<li><a href="contactadmin.php">Contact Messages</a></li>
					<li><a href="Home.php">Logout</a></li>
				</ul>
			</div>
			</nav>
			<div class="mid">
				<div class="contactmid">
					<div class="block">  
						<p>Contact Messages of Users<p>
						<table class="data display datatable" id="example">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Address</th>
								<th>Email</th>
								<th>Phone No.</th>
								<th>Message</th>
							</tr>
						</thead>
						<tbody>
				<?php
					$db= new Database();
					$query = "SELECT * FROM contact1 ORDER BY id ASC";
					$message = $db->select($query); 
					if ($message) {
						$i = 0;
						while ($result = $message->fetch_assoc()) {
						$i++;
							
				?>				
							<tr class="odd">
								<td><?php echo $i;?></td>
								<td><?php echo $result['name'];?></td>
								<td><?php echo $result['address'];?></td>
								<td><?php echo $result['email'];?></td>
								<td><?php echo $result['phone'];?></td>
								<td><?php echo $result['message'];?></td>
							</tr>
				<?php } } ?> 			
						</tbody>
					</table>
					
					<p>Contact Messages of Outsiders<p>
						<table class="data display datatable" id="example">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Address</th>
								<th>Email</th>
								<th>Phone No.</th>
								<th>Message</th>
							</tr>
						</thead>
						<tbody>
				<?php
					$db= new Database();
					$query = "SELECT * FROM contact ORDER BY id ASC";
					$message = $db->select($query); 
					if ($message) {
						$i = 0;
						while ($result = $message->fetch_assoc()) {
						$i++;
							
				?>				
							<tr class="odd">
								<td><?php echo $i;?></td>
								<td><?php echo $result['name'];?></td>
								<td><?php echo $result['address'];?></td>
								<td><?php echo $result['email'];?></td>
								<td><?php echo $result['phone'];?></td>
								<td><?php echo $result['message'];?></td>
							</tr>
				<?php } } ?> 			
						</tbody>
					</table>

				   </div>
					
					
				</div>
				
			</div>
			<div class="footer">
				<h3>Copyright &copy</h3>
			</div>
		</div>
	</body>
	
</html>




















