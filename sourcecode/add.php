<?php
session_start();?>
<html lang="en" dir="ltr">


<head>
<link rel="stylesheet" href="./css.css">
      <link rel="stylesheet" href="./add.css">
      <title>Add</title>
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
                <b>Mix & Match</b>
            </a>
        </li>
        <li>
            <a class="active logo" href="add.php">
                <b>Add</b>
            </a>
        </li>
    </ul>


    <?php

      // Connect to database

   if($_SESSION["UserID"] == "")
    { ?>
        <script type='text/javascript'>alert('please login');window.location.href='login.php';</script>"
   <?php exit();
    }


    else {

?>

      <form  enctype="multipart/form-data" method="post" action="add2.php">

      <div class="content tooltip">
    <h1>Add your style</h1>
    <span>คุณสามารถเลือกอัพโหลดรูปภาพแแบบเต็มตัวรูปเดียวหรือแยกอัพโหลดเสื้อกางเกงและรองเท้าแบบแยกกัน</span>
    </div>
     <br>

<div class="box">
    <div class="full">
      <h3>รูปเต็มตัว</h3>
      <input type="file" name="full" id="full"> <br><br>
      </div>

<div class="shirt">
      <h3>เสื้อ</h3>
      <input type="file" name="shirt" id="shirt"> <br><br>
      </div>

<div class="pant">
      <h3>กางเกง</h3>
      <input type="file" name="pant" id="pant" > <br><br>
      </div>

<div class="shoe">
      <h3>รองเท้า </h3>
      <input type="file" name="shoe" id="shoe"> <br><br>
      </div>
      </div>
    <div class="right">
    <input type="submit" value="Upload and Preview Images" name="Submit"> <br><br>
    </div>
      </form>
    <?php } ?>

</body>
</html>
