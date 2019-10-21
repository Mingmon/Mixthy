<?php
	session_start();
		include("config.php");
	$strSQL = "SELECT * FROM member WHERE Email = '".mysqli_real_escape_string($objCon,$_POST['txtEmail'])."'
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Email and Password Incorrect!";
	}
	else
	{
		$_SESSION["UserID"] = $objResult["UserID"];
		$_SESSION["Username"] = $objResult["Username"];
		$_SESSION["click"] =1;
		$_SESSION["button"] = $_POST["button"];
		session_write_close();
		header("location:index.php");
	}
	mysqli_close($objCon);
?>
