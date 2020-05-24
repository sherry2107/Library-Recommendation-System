<?php     

//$rollno = false;

if(isset($_POST['rollno'])){
    $rollno = $_POST['rollno'];
}

$dbhost = 'localhost';     
$dbuser = 'root';     
$dbpass = '';
$db = "library";     
$rollno = $_POST['rollno'];
$pass = $_POST['password'];

$encpword = base64_encode($pass);     
//$database = mysqli_select_db($connect,$db);
/*$user = $connect->query($getuser);*/  

$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);    
$getuser ="SELECT password FROM student WHERE rollno= '$rollno'";     
$query =mysqli_query($connect,$getuser);     
$row = mysqli_fetch_array($query);
$dbrollno = $row['rollno'];
if(isset($dbrollno)){
	$dbpword = $row['password'];
	if ($encpword == $dbpword) {
		session_start();  
    	$_SESSION['sess_user']=$username; 
    	//echo $dbpword;
    	header('location:dashboard.php');
	}
	else{
		echo "Invalid username or password!"; 
	}
}
else{
	if($rollno!==""  && $pword!==""){
		$insertquery = "INSERT INTO student(rollno,password) VALUES ('$rollno', '$encpword')";
	}
	else{
		echo "Please insert rollno & password correctly";
		header('Location:index.php');	
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

}

$connect->close();	
?>