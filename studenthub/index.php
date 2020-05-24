		 <?php
		 	session_start();
			if (isset($_SESSION["sess_rno"])){
		      header('location: dashboard.php');
		   }

			/*if (isset($_SESSION["sess_error"]===1)){
		      
		   }*/	
		   
		 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Library Online Catalogue & more</title>
</head>
<body>
	<div class="topBar">
		<span id="icon"><img src="logo2.png"></span>
		<!-- <span id="f">Upload</span>
		<span id="e">Create Projects</span>
		<span id="b">View Projects</span>
 
		<span id="p">Whats New?</span>

		 -->
		 <h2 style="padding-left: 10%; " id="tag">ITNU LIBRARY</h2>
		 <span class="search">
		 <div class="gcse-search" id="searchbar"></div>
		</span>
		<!-- <a href="login.php" >
			<span id="login1">Already Registered, Log in?</span>
		</a> -->
	</div>
	<div class="body">
		<h1 id="tag">
			Built For <br> the Students <br>by the students. 
		</h1>
		<h2 style="color:#f1f1f1;text-align: justify;margin-right:50%;font-weight: lighter; "  >
			Welcome to Online Library Catalogue here you can preview books and know where to find them physically in the ITNU Library and get great recommendations personalized just for you .
		</h2>
	</div>
	<form action="login.php" method="post" name="register" style="padding-top: 150px">
		<div class="register" >
			<h2>Login to  ITNU Library</h2>
			<br>
			Rollno<br>
			<input type="text" name="rollno" placeholder="ex: 18BCE353" id="regDetails" required="true" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();"><br><br>
			Password <br>
			<input type="password" name="password" placeholder="Enter your password" id="regDetails" pattern=".{8,12}" required title="8 to 12 characters"><br><br>
			<span class="subtext">Make sure it's at least 7 characters, including a number, and a lowercase letter.</span><br><br>

			<input type="submit" name="submit" value="Login" id="submit"  onclick="CheckPassword(document.register.password)">
		</div>
	</form>
</body>
<script type="text/javascript" src="password.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<script type="text/javascript" src="scrollHide.js"></script>
</html>
<script type="text/javascript">
	window.onload = demo;

function demo() {
    document.getElementById("gsc-i-id1").setAttribute("placeholder", "Search Online library catalogue")
}
</script>
<script async src="https://cse.google.com/cse.js?cx=001022893714809973004:iymmneqth2q"></script>
<style type="text/css">
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
	margin: 1% 0% 0 162% !important; 
	opacity: 1;
	background: none;
	border:none;
	}

</style>