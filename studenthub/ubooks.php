<?php
error_reporting(E_ERROR | E_PARSE);

	$rollno = false;
	if(isset($_POST['rollno'])){
    	$rollno = $_POST['rollno'];
	}
	$rollno = $_POST['rollno'];
	/*if ($flag == 0) {
		header('location:login.php');

	}*/
	/*$username = $_POST['username'];
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);
	$mail = $_POST['mail'];
	*/
	//$id = $_COOKIE['userid'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	        
	$db = "library";
	//$database = mysqli_select_db($connect,$db);
	/*$user = $connect->query($getuser);*/
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	
	$getuser = "SELECT * FROM library WHERE rollno= '$rollno'";
	
	$query = mysqli_query($connect,$getuser);
	
	$row = mysqli_fetch_array($query);
	$rollno = $row['rollno'];
	
	session_start();
	$rollno  = $_SESSION['sess_rno'] ;

  if (!isset($_SESSION["sess_rno"]))
   {
      header("location: index.php");
   } 

	$sql3 = "SELECT title from upcoming";
	$query3 = mysqli_query($connect,$sql3);
//Welcome to the dashboard
?>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>
<div class="topBar" id="navbar" style="display:;">
		<span id="icon"><img src="logo2.png"></span>
		<span id="f">My Profile</a></span>
		<span id="e">Browse</span>
 		<span id="b"> Upcoming books</span>
		
		<span id="p">Trending Reads</span>

		<span class="search">
			<!-- <input type="text" name="search" placeholder="Search Online library catalogue " id="search"><i class="fa fa-search"></i> -->
			
			<div class="gcse-search" id="searchbar"></div>

		</span>
		<span>Hello <b><?php echo $rollno?> !</b></span>
		<a href="logout.php"><span id="logout">&nbsp;&nbsp;Log out?</span></a>
		
		<!-- 
		<a href="login.php" >
			<span id="login1">Log in?</span>
		</a>
		 -->
	</div>
	<div class="dash">
		<div class="register">
			<h2>Upcoming Books <br></h2>
			<ul>
				<?php
				while ($row3 = mysqli_fetch_array($query3)){
			       ?>
			       <li>
			       <?php
			       echo " ".$row3['title']." ";
			       ?>
			   		</li>
					</br>
				<?php
	            }
	            ?>

			</ul>
			<br>
			<div id="submit1"><i class="" aria-hidden="true" style=""></i> View All Upcoming.</div>

		</div>
		
</body>
</html>
<script type="text/javascript">
	window.onload = demo;

function demo() {
    document.getElementById("gsc-i-id1").setAttribute("placeholder", "Search Online library catalogue")
}
</script>
<script async src="https://cse.google.com/cse.js?cx=001022893714809973004:iymmneqth2q"></script>
<style type="text/css">
	#logout{
		color:gray;
		text-decoration: none;
	}
	#logout:hover{
		color: white;
		text-decoration: underline;
	}
	#searchbar,.gsc-control-wrapper-cse{
		width:  500px !important;
		position: absolute !important;	
	margin: -10% 0 0 0 !important; 
	}
form.gsc-search {
	display:  !important;
	
}
.gsc-search-button ,.gsc-search-button-v2{
	/**display: none;*/
	background: ;
	margin-left:-15%; 
	border:none;
}
.gsc-control-cse{
	margin: 2% 0% 0 162% !important; 
	opacity: 1;
	background: none;
	border:none;
}

	#f{
		color:;
		text-decoration:underline;
	}
	li{
		font-weight: bold; 
		color: #202020;
	}
	#due,#author{
		font-weight: lighter; 
		font-size:0.8em ;
		color:#222;
	}
	#due{
		text-decoration: underline;
		font-size:0.8em ;
		color:gray;
	}
	body{

		/*overflow: hidden !important;*/
	}
	#submit{
		width: 45% !important;
		color:#009900 !important;
		background:none !important;
		border:1px solid #009900 !important; 
		font-size: 1em;
		text-align: center !important;
		padding: 3%;
		border-radius: 5% !important;
	}
	#submit:hover{
		background:linear-gradient(to right , #009900,#007700) !important; 
		transition: 2s ease;
		background:#009900 !important;
		
		color: #f1f1f1 !important;
		border-radius: 0% !important;
		padding: 0%;
	}
	#submit1{
		width: 45% !important;
		color:black !important;
		background:none !important;
		border:1px solid black !important; 
		font-size: 1em;
		text-align: center !important;
		padding: 3%;
		border-radius: 5% !important;
		box-shadow: 0 9px black;
	}
	#submit1:hover{
		background:linear-gradient(to right , #009900,#007700) !important; 
		transition: .31s ease;
		background:black !important;
		
		color: #f1f1f1 !important;
		border-radius: 0% !important;
		
		cursor: pointer;
		 
	}	
	#submit,#submit1:active{
		 transform: translateY(5px);
		 box-shadow: 0 2px gray;
	}
		
	/*#dash{
		margin:10% 0 0 0 !important; 
	}*/
	#regDetails,#regDetails1{
		padding: 4%;
	}

	.register1{
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin:-42% 8% 13% 60%; 
		border-radius:1%; 
	}

	.register{
		width: 50%;
		opacity: 1;
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin: 8% 60% 16% 10%; 
		border-radius:1%; 
		
	}
	/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<script type="text/javascript" src="scrollHide.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="style.css">
