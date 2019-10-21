<?php
session_start(); ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css.css">
  </head>
  <body>
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

    <div class="w3-content w3-section" >
        <img class="mySlides" src="./img/slide.jpg" style="width:100%;height:25%">
        <img class="mySlides" src="./img/slide9.jpg" style="width:100%;height:25%">
        <img class="mySlides" src="./img/slide7.jpg" style="width:100%;height:25%">
    </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
   <ul class="menu">
        <li>
            <a class="logo" href="index.php">
                <b>Top vote</b>
            </a>
        </li>
        <li>
            <a class="logo" href="mix&match.php">
                <b>Mix & Math</b>
            </a>
        </li>
        <li>
            <a class="active logo" href="add.php">
                <b>Add</b>
            </a>
        </li>
    </ul>
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
    // $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
    // $objQuery = mysqli_query($objCon,$strSQL);
    // $objResult = mysqli_fetch_array($objQuery);

      // If upload button is clicked ...
      if(isset($_POST['Submit'])){

      // Get image name
      $fullimage = $_FILES['full']['name'];
      $shirtimage = $_FILES['shirt']['name'];
      $pantimage = $_FILES['pant']['name'];
      $shoeimage = $_FILES['shoe']['name'];




        // image file directory
        $target1 = "image/add/full/".basename($fullimage);
        $target2 = "image/add/shirt/".basename($shirtimage);
        $target3 = "image/add/pant/".basename($pantimage);
        $target4 = "image/add/shoe/".basename($shoeimage);



        // check type of file
         $uploadOk=0;
        if($_FILES["full"]["type"]=="image/jpeg" || $_FILES["full"]["type"]=="image/png"){

          $uploadOk = 1;

        }
        if($_FILES["shirt"]["type"]=="image/jpeg" || $_FILES["shirt"]["type"]=="image/png"){
          $uploadOk = 3;

        }
        if($_FILES["pant"]["type"]=="image/jpeg" || $_FILES["pant"]["type"]=="image/png"){
          $uploadOk = 3;

        }
        if($_FILES["shoe"]["type"]=="image/jpeg" || $_FILES["shoe"]["type"]=="image/png"){
          $uploadOk = 3;

        }

        if ($uploadOk==0){
          $message="กรุณาอัพรูปภาพด้วยไฟล์ jpg หรือ png";
          echo "<script type='text/javascript'>alert('$message');window.location.href='add.php';</script>";
          exit();
        }
        // Check file size
          if ($_FILES["full"]["size"] && $_FILES["shirt"]["size"] && $_FILES["pant"]["size"] && $_FILES["shoe"]["size"] > 500000) {
            $message="ไฟล์มีขนาดใหญ่เกินไป";
            echo "<script type='text/javascript'>alert('$message');window.location.href='add.php';</script>";
            exit();
          }

          if (file_exists($_FILES['full']['tmp_name'] )) {
            if(empty($_FILES['shirt']['tmp_name'] || $_FILES['pant']['tmp_name'] || $_FILES['shoe']['tmp_name'])==false) {
              $message="อัพโหลดรูปเกิน";
              echo "<script type='text/javascript'>alert('$message');window.location.href='add.php';</script>";
              exit();
            }
          }

          if (empty($_FILES['full']['tmp_name'] )) {
            if (empty($_FILES['shirt']['tmp_name']) || empty($_FILES['pant']['tmp_name']) || empty($_FILES['shoe']['tmp_name'])) {
            $message="กรุณาอัพโหลดรูปภาพให้ครบ";
            echo "<script type='text/javascript'>alert('$message');window.location.href='add.php';</script>";
            exit();
            }
          }

      if ($uploadOk==1)  {

          //insert to database

          $sql = "INSERT INTO full (image) VALUES ('$target1')";
          mysqli_query($objCon, $sql);

          // show picture

          if(move_uploaded_file($_FILES["full"]["tmp_name"], $target1))
          {
          echo "<br />";
          echo "<br />";
          echo "<br />";
          echo "<img src=".$target1." height=500 width=300 />";
          echo "<br>";
          }

        }
        if ($uploadOk==3) {


          $sql= "INSERT INTO pants (image)VALUES ('$target3')";
          mysqli_query($objCon, $sql);
          $sql = "INSERT INTO shirts (image) VALUES ('$target2')";
          mysqli_query($objCon, $sql);
          $sql = "INSERT INTO shoes (image) VALUES ('$target4')";
          mysqli_query($objCon, $sql);

          echo "<br />";
          echo "<br />";
          echo "<br />";
          if(move_uploaded_file($_FILES["shirt"]["tmp_name"], $target2))
          {
          echo "<img src=".$target2." height=200 width=300 />";
          echo "<br>";
          echo "<br />";
          }
          if(move_uploaded_file($_FILES["pant"]["tmp_name"], $target3))
          {
          echo "<img src=".$target3." height=200 width=300 />";
          echo "<br>";
          echo "<br />";
          }
          if(move_uploaded_file($_FILES["shoe"]["tmp_name"], $target4))
          {
          echo "<img src=".$target4." height=200 width=300 />";
          echo "<br>";
          echo "<br />";
          }
        }
        $_SESSION["ok"]=$uploadOk;
        $_SESSION["full"]=$target1;
        $_SESSION["shirt"]=$target2;
        $_SESSION["pant"]=$target3;
        $_SESSION["shoe"]=$target4;

mysqli_close($objCon);

}
// $sql = "INSERT INTO uniform (clothesDesc) VALUES ('$clothdes')";
// mysqli_query($objCon, $sql);



    ?>
    <form action="add3.php" method="post">
    <br><br>  คำอธิบาย <br>
    <input type="text" name="ClothtDescription" > <br><br><br>

      <input type="submit" value="Submit" name="Submit2"> <br><br><br><br>
    </form>


  </body>
</html>
