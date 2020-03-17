<?php
	require("connect.php");
	session_start();
	$user = mysqli_real_escape_string($conn,$_POST['txtUsername']);
	$pass = mysqli_real_escape_string($conn,$_POST['txtPassword']);
	$strSQL = "SELECT * FROM member WHERE Username = '$user' AND Password = '$pass'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	print_r($objResult);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			header("location:./index.php");

			// if($objResult["Status"] == "ADMIN")
			// {
			// 	header("location:admin_page.php");
			// }
			// else
			// {
			// 	//header("location:user_page.php");
			// 	header("location:pie_chart.php");
			// }
	}
	mysqli_close($objCon);
?>
