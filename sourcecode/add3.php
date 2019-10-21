<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php


include("config.php");
if($_SESSION["UserID"] == "")
 {
echo "Please Login!";
$link_address1 = 'login.php';
 echo "<p>";
 echo "<a href='$link_address1'>Go to login page</a>";
exit();
 }

if(isset($_POST['Submit2'])){
  // Get text
  $clothdes = mysqli_real_escape_string($objCon, $_POST['ClothtDescription']);

 if ($_SESSION["ok"]==3) {
  $strSQL = "SELECT * FROM shirts  WHERE image = '".$_SESSION["shirt"]."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  $_SESSION["shirtID"]=$objResult['shirtID'];

  $strSQL = "SELECT * FROM pants  WHERE image = '".$_SESSION["pant"]."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  $_SESSION["pantID"]=$objResult['pantID'];

  $strSQL = "SELECT * FROM shoes  WHERE image = '".$_SESSION["shoe"]."' ";
  $objQuery = mysqli_query($objCon,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);
  $_SESSION["shoeID"]=$objResult['shoeID'];



  $strSQL="INSERT INTO uniform (UserID,shirtID,pantID,shoeID,clothesDesc) VALUES('".$_SESSION["UserID"]."',
    '".$_SESSION["shirtID"]."','".$_SESSION["pantID"]."','".$_SESSION["shoeID"]."','$clothdes')";
  $objQuery = mysqli_query($objCon,$strSQL);

  }
  else {
    $strSQL = "SELECT * FROM full  WHERE image = '".$_SESSION["full"]."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    $_SESSION["fullID"]=$objResult['fullID'];

    $strSQL="INSERT INTO uniform (UserID,fullID,clothesDesc) VALUES('".$_SESSION["UserID"]."','".$_SESSION["fullID"]."',
      '$clothdes')";
    $objQuery = mysqli_query($objCon,$strSQL);

  }



echo  "<script type='text/javascript'>alert('success');window.location.href='index.php';</script>" ;


      // $strSQL = "INSERT INTO uniform (UserID,fullID,shirtID,pantID,shoeID,clothesDesc) VALUES ('".$_SESSION["UserID"]."','".$_SESSION["full"]."'
      //   ,'".$_SESSION["shirt"]."','".$_SESSION["pant"]."','".$_SESSION["shoe"]."','$clothdes')";
    //  $strSQL1 = "INSERT INTO shirts (image) VALUES ('$shirt')";
    // $strSQL2 = "INSERT INTO shoes (image) VALUES ('$shoe')";
    // $strSQL3 = "INSERT INTO pants (image) VALUES ('$pant')";
    // $objQuery = mysqli_query($objCon,$strSQL1);
    // $objQuery = mysqli_query($objCon,$strSQL2);
    // $objQuery = mysqli_query($objCon,$strSQL3);

}
mysqli_close($objCon);
?>

<?php

$link_address1 = 'index.php';
 echo "<p>";
 echo "<a href='$link_address1'>Go to Homepage</a>";

  ?>

  </body>
</html>
