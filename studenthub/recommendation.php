<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	        
	$db = "library";

	if(isset($_POST['rollno'])){
    	$rollno = $_POST['rollno'];
	}
	$rollno = $_POST['rollno'];
	$rollno = "ITFIC008";
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

	$sql3 = "SELECT title from recommendation where cardnumber = '$rollno'";
	$query3 = mysqli_query($connect,$sql3);
	echo "<ul>";
	while ($row3 = mysqli_fetch_array($query3)){
			echo "<li>";
			echo " ".$row3['title']." ";
			echo "</li>";
			echo "</br>";
	}
	/*$cluster = array();
	$sql = "SELECT Cluster FROM recommendation where cardnumber = '$rollno'";
	$query1 = mysqli_query($connect,$sql);
	/*echo "<select name='clus1'>";
	echo "<ul>";
	while ($row1 = mysqli_fetch_array($query1)){
	/*array_push($cluster,$row1['Cluster']);
		echo "<option value='".$row1['Cluster']."'>".$row1['Cluster']."</option>";*/
		/*echo " ".$row1['Cluster']." ";
		$value = $row1['Cluster'];
		$sql2 = "SELECT title FROM recommendation where Cluster = '$value'";
		$query2 = mysqli_query($connect,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<li>";
			echo " ".$row2['title']." ";
			echo "</li>";
			echo "</br>";

		}

	}*/
	/*echo "</select>";
	$no = count($cluster);
	$i = 0; 
	while ($i<$no) {
	echo " ".$cluster[$i]." ";
	}*/
	
?>

