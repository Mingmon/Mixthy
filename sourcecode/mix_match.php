<?php  session_start();?>
<html>

<head>

<title>Mix & Match</title>
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./mix&match.css">
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
            <a class="active logo" href="mix&match.php">
                <b>Mix & Match</b>
            </a>
        </li>
        <li>
            <a class="logo" href="add.php">
                <b>Add</b>
            </a>
        </li>
    </ul>


    <div class="content">
        <h1><b>Mix&Match</b></h1>
    </div>
    <div class="box">
      <?php //session_start(); ?>

      <a  href="menmnm.php" class="button-men"><b>MEN</b></a>

      <a  href="womenmnm.php" class="button-women"><b>WOMEN</b></a>
    </div>
</body>

</html>
