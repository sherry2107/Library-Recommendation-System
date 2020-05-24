<?php
if(isset($_POST['rollno'])){
    $rollno = $_POST['rollno'];
}
	//$rollno = $_POST['rollno'];
	$counter = 1;
	
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);
	$mail = $_POST['mail'];
	$db = "library";

	

	$connect = mysqli_connect('localhost','root','');
	$database = mysqli_select_db($connect,$db);
	//Thanks to Sharan Chhugani (18BCE354) for helping with $flag logic ♥ ;
	$flag =0;

	if($rollno!=="" &&  $mail!=="" && $pword!==""){
		$insertquery = "INSERT INTO student(rollno,email,password) VALUES ('$rollno', '$mail', '$encpword')";
	}
	else{
		//header('Location:index.php');	
	}

	if ( $connect->query ($insertquery) === TRUE) {
		$flag = 1;
	    echo "New record created successfully";
	} 
	else {
	    echo "Error: " . $insertquery . "<br>" . $connect->error;
	}
	 $counter= $counter++;
	 $_COOKIE['userid'] = $counter;

    if($flag == 1){
		$flag=0;
    	header('Location:dashboard.php');
    }
    else{
    	header('Location:index.php');	
    	$flag=0;
    }
    $flag=0;
    
$connect->close();

?>