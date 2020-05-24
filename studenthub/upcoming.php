<?php
	$dbhost = 'localhost';     
	$dbuser = 'root';     
	$dbpass = '';
	$db = "library";

	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$callno = $_POST['callno'];
	$c =0;
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);    
	$sql ="INSERT into upcoming values ('$isbn','$callno','$title')"; 
	if ( $connect->query ($sql) === TRUE) {
	    	$message = "Data Entered Successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Location:admin.php');
		}    
		else{
			$message = "Data Failed to Enter";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Location:admin.php');	
		}
	/*$query =mysqli_query($connect,$sql);    
	$row = mysqli_fetch_array($query);*/
?>

