<?php
	include 'security/session.php';
	
	$username = $_SESSION['login_user'];
	
	$date = date('Y-m-d',strtotime($_POST['date']));
	$day = $_POST['day'];
	$hour = $_POST['hour'];
	
	$date_check_sql="Select COUNT(*) from booking where bookdate = '$date'"; 
	$date_check_result=mysqli_query($db,$date_check_sql);  
	$row = mysqli_fetch_array($date_check_result);
	//$row = mysql_fetch_array($date_check_result, MYSQL_NUM);
	$row['0'];
	if($row['0'] == 1){
		$update_query = "UPDATE booking SET hour".$hour."= '".$username."' WHERE bookdate = '".$date."'";	
	}else{
		$update_query = "INSERT INTO booking (hour".$hour.",bookdate) values ('".$username."','".$date."')";	
	}
	mysqli_query($db,$update_query);
	echo 'Successfully updated';
?>