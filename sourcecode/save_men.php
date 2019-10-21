<?php session_start(); ?>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="./css.css">
  <link rel="stylesheet" href="./mix&match.css">
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php

    include("config.php");?>
    <ul>
      <li>
        <a class="logo" href="index.php">
          <b>
            <font size="4">Mixthy</font>
          </b>
        </a>
      </li>
      <li class="auth">
        <?php
        if(isset($_SESSION["click"])){?>
          <div>
            <span class="logo">
              <b>
                <font size="4">
                  <?php echo $_SESSION["Username"];?>
                </font>
              </b>
            </span>
            <a class="logo" href="logout.php">
              <b>
                <font size="4">Log out</font>
              </b>
            </a>
          </div>
          <?php
        }
        else{?>
            <a class="logo" href="login.php">
              <b>
                <font size="4">LogIn</font>
              </b>
            </a>
            <?php
        }
        ?>
      </li>
    </ul>
    <div class="content">
      <h1>Mix&Match</h1>
    </div>
    <div class="showmix">
      <div class="box-showmix">

        <?php



	   // $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION["UserID"]."' ";
	   //  $objQuery = mysqli_query($objCon,$strSQL);
	   //   $objResult = mysqli_fetch_array($objQuery);
    if(isset($_POST['submit'])){
      $_SESSION["shirt"]=$_POST["shirt"];
      $_SESSION["pant"]=$_POST["pant"];
      $_SESSION["shoe"]=$_POST["shoe"];
      // $shirtdes = mysqli_real_escape_string($objCon, $_POST['comment']);
    //   if ($_POST['shirt']||$_POST['shoe']||$_POST['shoe']==""){
    //   echo "please choose";
    //   exit();
    // }


    //   if ($_POST['shirt']==""){
    //   echo "please choose shirt";
    //   exit();
    // }
    //
    //   if ($_POST['pant']==""){
    //   echo "please choose pant";
    //   exit();
    // }
    //
    //   if ($_POST['shoe']==""){
    //   echo "please choose shoe";
    //   exit();
    // }



// else {
//   echo "Your shirt : {$_POST['shirt']} ";
//   $shirt = "image/men/shirt/shirt{$_POST['shirt']}.jpg";
// //  $shirt1 = base64_encode(file_get_contents("image/men/shirt/{$_POST['shirt']}.jpg"));
//   echo '<img src="'.$shirt.'" width="200"  height="200">';
//   echo "<br>";
//
//   echo "Your pant : {$_POST['pant']} ";
//   $pant = "image/men/pant/pant{$_POST['pant']}.jpg";
//   echo '<img src="'.$pant.'" width="200"  height="200">';
//   echo "<br>";
//
//   echo "Your shoe : {$_POST['shoe']} ";
//   $shoe = "image/men/shoe/shoe{$_POST['shoe']}.jpg";
//   echo '<img src="'.$shoe.'" width="200"  height="200">';
//   echo "<br>";
//
//
//
//   $strSQL = "INSERT INTO uniform (UserID,shirtID) VALUES ('".$_SESSION["UserID"]."','".$_POST["shirt"]."')";
//   $objQuery = mysqli_query($objCon,$strSQL);
//


      if ($_POST['shirt']){
      echo "Your shirt : {$_POST['shirt']} ";
      $shirt = "image/men/shirt/shirt{$_POST['shirt']}.jpg";
    //  $shirt1 = base64_encode(file_get_contents("image/men/shirt/{$_POST['shirt']}.jpg"));
      echo '<img src="'.$shirt.'" width="200"  height="200">';
    }

      echo "<br>";



      if ($_POST['pant']){
      echo "Your pant : {$_POST['pant']} ";
      $pant = "image/men/pant/pant{$_POST['pant']}.jpg";
      echo '<img src="'.$pant.'" width="200"  height="200">';
    }

      echo "<br>";

      if ($_POST['shoe']){
      echo "Your shoe : {$_POST['shoe']} ";
      $shoe = "image/men/shoe/shoe{$_POST['shoe']}.jpg";
      echo '<img src="'.$shoe.'" width="200"  height="200">';
    }

      echo "<br>";


    }

  //   $strSQL = "INSERT INTO member (username,email,password) VALUES ('".$_POST["txtUsername"]."',
  // '".$_POST["txtEmail"]."','".$_POST["txtPassword"]."')";
  // $objQuery = mysqli_query($objCon,$strSQL);


// $_POST["$_SESSION["shirt"]"]

// if(isset($_POST['submit2'])){
//     $shirtdes = mysqli_real_escape_string($objCon, $_POST['comment']);
//       $strSQL = "INSERT INTO uniform (UserID,shirtID,pantID,shoeID) VALUES ('".$_SESSION["UserID"]."','".$_POST["$_SESSION["shirt"]"]."',
//                 '".$_POST["$_SESSION["pant"]"]."','".$_POST["$_SESSION["shoe"]"]."')";



// if(isset($_POST['submit2'])){
//     $shirtdes = mysqli_real_escape_string($objCon, $_POST['comment']);
//       $strSQL = "INSERT INTO uniform (UserID,shirtID,pantID,shoeID) VALUES ('".$_SESSION["UserID"]."','".$_POST["shirt"]."',
//                 '".$_POST["pant"]."','".$_POST["shoe"]."')";


    //  $strSQL1 = "INSERT INTO shirts (image) VALUES ('$shirt')";
    // $strSQL2 = "INSERT INTO shoes (image) VALUES ('$shoe')";
    // $strSQL3 = "INSERT INTO pants (image) VALUES ('$pant')";
    // $objQuery = mysqli_query($objCon,$strSQL1);
    // $objQuery = mysqli_query($objCon,$strSQL2);
    // $objQuery = mysqli_query($objCon,$strSQL3);
    //  $objQuery = mysqli_query($objCon,$strSQL);

// }

  mysqli_close($objCon);

    ?>
      </div>
    </div>

    <div class="box-comment">
      <form name="form1" method="post" action="save_success.php">

        <h2>comment</h2>
        <!-- <textarea name="comment" rows="5" cols="40"></textarea> -->
        <input type="text" name="comment" style="width:100%;height:100px;">
    </div>
    <br>


    <div>
      <div class="right">
        <button class="button-mix" name="submit2">Submit</button>
      </div>

      <div class="left">
        <a href="menmnm.php" class="button-back">Back</a>
</div>
    </div>

    </form>

</body>

</html>
