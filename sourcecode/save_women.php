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
          session_start();
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
    <div class="content"><h1>Mix&Match</h1></div>
    <div class="showmix">
      <div class="box-showmix">
      <?php


        if(isset($_POST['submit'])){
          $_SESSION["shirt"]=$_POST["shirt"];
          $_SESSION["pant"]=$_POST["pant"];
          $_SESSION["shoe"]=$_POST["shoe"];
          // if ($_POST['shirt']){
          // echo "Your shirt :";
          //   if ($_POST['shirt']=="shirt1") {
          //   // $selected_val = $_POST['shirt'];
          //   // echo "You have selected shirt :" .$selected_val;
          //     echo "<img src=\"http://oi43.tinypic.com/2psrew2.jpg\" width=\"100\"  height=\"100\" />";
          //   }
          // }

          if ($_POST['shirt']){
          echo "Your shirt : {$_POST['shirt']} ";
          $shirt = "image/women/shirt/shirt{$_POST['shirt']}.jpg";
          echo '<img src="'.$shirt.'" width="200"  height="200">';
        }



          echo "<br>";

          if ($_POST['pant']){
            echo "Your pant : {$_POST['pant']} ";
            $pant = "image/women/pant/pant{$_POST['pant']}.jpg";
            echo '<img src="'.$pant.'" width="200"  height="200">';
          }

          echo "<br>";

          if ($_POST['shoe']){
          echo "Your shoe : {$_POST['shoe']} ";
          $shoe = "image/women/shoe/shoe{$_POST['shoe']}.jpg";
          echo '<img src="'.$shoe.'" width="200"  height="200">';
        }

          echo "<br>";

        }
        // $strSQL = "SELECT * FROM uniform ";
      // $objQuery = mysqli_query($objCon,$strSQL);
       // $objResult = mysqli_fetch_array($objQuery);


         // $strSQL1 = "INSERT INTO shirts (image) VALUES ('$shirt')";
         // $strSQL2 = "INSERT INTO shoes (image) VALUES ('$shoe')";
         // $strSQL3 = "INSERT INTO pants (image) VALUES ('$pant')";
         // $objQuery = mysqli_query($objCon,$strSQL1);
         // $objQuery = mysqli_query($objCon,$strSQL2);
         // $objQuery = mysqli_query($objCon,$strSQL3);



      mysqli_close($objCon);
        ?>
        </div>
    </div>

    <div class="box-comment">
        <form name="form1" method="post" action="save_success.php">
          <h2>comment</h2>
          <!-- <textarea name="comment" rows="5" cols="40"></textarea> -->
          <input type="text" name="comment"style="width:100%;height:100px;">
      </div>
          <br>


    <div>
    <div class="right">
      <button class="button-mix" name="submit2">Submit</button>
    </div>
      <div class="left">
        <a href="womenmnm.php" class="button-back">Back</a>
      </div>
    </div>

    </form>

</body>

</html>
