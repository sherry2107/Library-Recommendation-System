<?php  
	$flag=0;
	$rollno = false;
	if(isset($_POST['rollno'])){
    	$rollno = $_POST['rollno'];
	}
	$counter = 1;
	$dbhost = 'localhost';     
	$dbuser = 'root';     
	$dbpass = '';
	$db = "library";     
	$rollno = $_POST['rollno'];
     
	$pass = $_POST['password'];
	if($rollno == "ADMIN" && $pass == "admin123"){
		session_start();
		$_SESSION['sess_rno']=$rollno;
		header('Location:admin.php');
		
		return;
	}
	
	$encpword = md5($rollno.$pass);     

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);    
	$getuser ="SELECT * FROM student WHERE rollno= '$rollno'";     
	$query =mysqli_query($connect,$getuser);    
	$row = mysqli_fetch_array($query);
	$dbrollno = $row['rollno'];
	
	if(!isset($dbrollno)){
		echo "boo";
		if($rollno!==""  && $pass!==""){
			$insertquery = "INSERT INTO student(rollno,password) VALUES ('$rollno','$encpword')";
		}
		else{
			echo "Please insert rollno & password correctly";
			//header('Location:index.php');	
		}
		if ( $connect->query ($insertquery) === TRUE) {
			$flag = 1;
	    	echo "New record created successfully";
		}
		else {
		    echo "userError: " . $insertquery . "<br>" . $connect->error;
		}
			$counter= $counter++;
		 	$_COOKIE['studentid'] = $counter;

	    if($flag == 1){
			$flag=0;
			//echo "Register successfull";
			session_start();  
    		$_SESSION['sess_rno']=$rollno;
	    	header('Location:dashboard.php');
	    }
	    else{
	    	echo "Register unsuccessfull";
	    	header('Location:index.php');	
	    	$flag=0;
	    }
	    $flag=0;
	    
	}
	else{

		
		$getpw ="SELECT password FROM student WHERE rollno= '$rollno'";     
		$query =mysqli_query($connect,$getuser);     
		$row = mysqli_fetch_array($query);
		$dbpword = $row['password'];
		
		if ($encpword == $dbpword) {
			session_start();  
    		$_SESSION['sess_rno']=$rollno;
    		if($rollno == "ADMIN"  && $pass == "ADMIN1234"){
				header('Location:admin.php');
			} 
    		echo "Login successfull";
	    	header('location:dashboard.php');
		}
		else{
			echo "Invalid username or password!"; 
			/*session_start();  
    		$_SESSION['sess_error']=1; 
			header('location:index.php')*/
		}
	}
	$connect->close();
?>