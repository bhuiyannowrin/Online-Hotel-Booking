<?php

if(isset($_GET['id']))
{
    include("include/config.php");
    include("include/Database.php");
	$db= new Database();
	$id=$_GET['id'];
	$sql1="select * from booking where id='$id'";
	$result = mysqli_query($db->link,$sql1);
	$array=mysqli_fetch_array($result);
	
	$id=$array['id'];
	$name=$array['name'];
	$phone=$array['phone'];
	$address=$array['address'];
	$type=$array['type'];
	
	$query1 = "insert into bookingconfirm (id,name,phone,address,type) values ('$id','$name','$phone','$address','$type')";
	
	mysqli_query($db->link,$query1);
	
	$query = "DELETE FROM booking WHERE id='$id'";
	if($db->link->query($query)==true)
    {
        header("Location: myadmin.php");
        
    }
    else
    {
        die($db->link->error);
    }
}
?>