<?php
 include("config.php");
 if(trim($_POST["txtUsername"]) == "")
 {
  echo "Please input Username!";
   $link_address1 = 'register.php';
  echo "<p>";
  echo "<a href='$link_address1'>Go back to Register page</a>";
  exit();
 }
 if(trim($_POST["txtEmail"]) == "")
 {
  echo "Please input Email!";
     $link_address1 = 'register.php';
  echo "<p>";
  echo "<a href='$link_address1'>Go back to Register page</a>";
  exit();
 }
 if(trim($_POST["txtPassword"]) == "")
 {
  echo "Please input Password!";
     $link_address1 = 'register.php';
  echo "<p>";
  echo "<a href='$link_address1'>Go back to Register page</a>";
  exit();
 }
 if($_POST["txtPassword"] != $_POST["txtConPassword"])
 {
  echo "Password not Match!";
     $link_address1 = 'register.php';
  echo "<p>";
  echo "<a href='$link_address1'>Go back to Register page</a>";
  exit();
 }

 $strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' ";
 $objQuery = mysqli_query($objCon,$strSQL);
 $objResult = mysqli_fetch_array($objQuery);
 if($objResult)
 {
   echo "Username already exists!";
      $link_address1 = 'register.php';
  echo "<p>";
  echo "<a href='$link_address1'>Go back to Register page</a>";
 }
 else
 {

  $strSQL = "INSERT INTO member (Username,Email,Password) VALUES ('".$_POST["txtUsername"]."',
  '".$_POST["txtEmail"]."','".$_POST["txtPassword"]."')";
  $objQuery = mysqli_query($objCon,$strSQL);

  echo "Register Completed!<br>";

  echo "<br> Go to <a href='login.php'>Login page</a>";
}

mysqli_close($objCon);
?>
