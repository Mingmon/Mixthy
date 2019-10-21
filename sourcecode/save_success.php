<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./login.css">
    <title></title>
  </head>
  <body>

  <div>
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
    </div>


<?php  session_start();
include("config.php");
if($_SESSION["UserID"] == "")
{?>

<script type='text/javascript'>alert('please login');window.location.href='login.php';</script>"


<?php
exit();
}

if(isset($_POST['submit2'])){


  $strSQL = "INSERT INTO uniform (UserID,shirtID,pantID,shoeID,clothesDesc) VALUES ('".$_SESSION["UserID"]."','".$_SESSION["shirt"]."',
  '".$_SESSION["pant"]."','".$_SESSION["shoe"]."','".$_POST["comment"]."')";
    //  $strSQL1 = "INSERT INTO shirts (image) VALUES ('$shirt')";
    // $strSQL2 = "INSERT INTO shoes (image) VALUES ('$shoe')";
    // $strSQL3 = "INSERT INTO pants (image) VALUES ('$pant')";
    // $objQuery = mysqli_query($objCon,$strSQL1);
    // $objQuery = mysqli_query($objCon,$strSQL2);
    // $objQuery = mysqli_query($objCon,$strSQL3);
      $objQuery = mysqli_query($objCon,$strSQL);

}
mysqli_close($objCon);
?>
<script type='text/javascript'>alert('success');window.location.href='index.php';</script>"
  </body>
</html>
