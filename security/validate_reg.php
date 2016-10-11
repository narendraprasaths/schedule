<?php
	include 'dbconfig.php';

	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$repassword = $_POST['Repeat_Password'];
	$staffid = $_POST['StaffId'];

	$reg_check_sql = mysqli_query($db,"select username from users where username = '$username'");
	$reg_result = mysqli_fetch_array($reg_check_sql);

	if ($reg_result) {
		echo '<script> alert("Username already available");</script>';
		header('Refresh:1 ; URL=../index.php');
	}else{
		if ($password == $repassword) {
			$password = md5($password);
			$query = "insert into users(username,password,staffid) values('$username','$password','$staffid')";
			if (mysqli_query($db,$query) === true) {
				echo '<script> alert("Registration Successful");</script>';
				header("Refresh:1 ; URL=../index.php");
			}else{
				echo '<script> alert("Registration Error. Please Try again.");</script>';
			}
		}else{
			echo '<script> alert("Password does not match");</script>';
		}
	}
?>