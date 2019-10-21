<?php session_start();
include('config.php');
?>
<html>

<head>
<style>
		.box {
			text-align: center;
			margin-bottom: 2%;
			background-color: #ffffff;
			height: 600px;


		}

		.colum {
			float: left;
			width: 25%;
			margin-left: 50px;

		}
	</style>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="main.css">
	<title>Mixthy</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                            <!-- ถ้าไม่ได้ login ให้เป็น Guest  -->
                                <?php //if($_SESSION["UserID"] == "")    {
                                       //$_SESSION["UserID"]=="0";
                                       //$_SESSION["Username"]=="Guest";
                                 //}
                                 //else{
                                echo $_SESSION["Username"];//}?>

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
            <a class="active logo" href="index.php">
                <b>Top vote</b>
            </a>
        </li>
        <li>
            <a class="logo" href="mix&match.php">
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
    <h1>Top Vote</h1>
    </div>
    <div>
      <?php
    $sql = "SELECT * FROM ranking_info ORDER BY count_like DESC";
$result = mysqli_query($objCon, $sql);
// fetch all posts from database
// return them as an associative array called $posts
$tops = mysqli_fetch_all($result, MYSQLI_ASSOC);?>
   <!-- นับ -->
<?php $i=0;?>
    <?php foreach ($tops as $top): ?>
<?php
$i++;
// <!--  เอา 5 อันดับ-->
 if ($i>6){
  break;  }

// echo $top['post_id'];

$strSQL = "SELECT fullID FROM uniform WHERE ID = '".$top["post_id"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>
<?php if($objResult['fullID']!=""){?>
	<div class="box colum">
  <h1>No. <?php echo $i;?> </h1>

    <?php

				$full="SELECT image FROM full WHERE fullID = '".$objResult['fullID']."'";
				$objQuery = mysqli_query($objCon,$full);
			 $objResult = mysqli_fetch_array($objQuery);
			 $fullPic=$objResult["image"];
					 echo '<img src="'.$fullPic.'" width="250"  height="450">';
?>
<h2> Like : <?php echo $top['count_like'];?> </h2>
</div>

<?php } else{?>
<div class="box colum">
  <h1>No. <?php echo $i;?> </h1>
  <!-- <p>like counter : <?php ?></p> -->
	<div>
    <?php
    $shirt="SELECT shirtID FROM uniform WHERE ID = '".$top['post_id']."'";
    $objQuery = mysqli_query($objCon,$shirt);
    $objResult = mysqli_fetch_array($objQuery);
$shirt= "SELECT image FROM shirts WHERE shirtID ='".$objResult['shirtID']."'";
$objQuery = mysqli_query($objCon,$shirt);
$objResult = mysqli_fetch_array($objQuery);
$shirtPic=$objResult["image"];
		echo '<img src="'.$shirtPic.'" width="150"  height="150">';
			//   echo $post['shirtID'];?>  </div>
			<div>
      <?php
      $pant="SELECT pantID FROM uniform WHERE ID = '".$top['post_id']."'";
      $objQuery = mysqli_query($objCon,$pant);
      $objResult = mysqli_fetch_array($objQuery);
			$pant= "SELECT image FROM pants WHERE pantID ='".$objResult['pantID']."'";
			$objQuery = mysqli_query($objCon,$pant);
			$objResult = mysqli_fetch_array($objQuery);
			$pantPic=$objResult["image"];
		echo '<img src="'.$pantPic.'" width="150"  height="150">';
			//   echo $post['pantID'];?> </div>
			<div>
    <?php
      $shoe="SELECT shoeID FROM uniform WHERE ID = '".$top['post_id']."'";
      $objQuery = mysqli_query($objCon,$shoe);
      $objResult = mysqli_fetch_array($objQuery);
    $shoe= "SELECT image FROM shoes WHERE shoeID ='".$objResult['shoeID']."'";
			$objQuery = mysqli_query($objCon,$shoe);
			$objResult = mysqli_fetch_array($objQuery);
			$shoePic=$objResult["image"];
		echo '<img src="'.$shoePic.'" width="150"  height="150">';
			//   echo $post['shoeID'];

        ?></div>

        <h2> Like : <?php echo $top['count_like'];?> </h2>
<?php }?>
	</div>
 <?php endforeach ?>
 <div class="colum right">
     <a  href="seeAll.php" class="button">See All</a>

        </div>
    </div>
   <?php
   function getLikes($id)
   {
     global $objCon;

     $sql = "SELECT COUNT(*) FROM rating_info
               WHERE post_id = $id AND rating_action='like'";

     $rs = mysqli_query($objCon, $sql);
     $result = mysqli_fetch_array($rs);

     return $result[0];
   }
   //******************** */
   $sql = "SELECT * FROM uniform";
$result = mysqli_query($objCon, $sql);
// fetch all posts from database
// return them as an associative array called $posts
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


        <?php foreach ($posts as $post): ?>
        <?php
        $strSQL = "SELECT * FROM ranking_info WHERE post_id = '".$post["ID"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
    $count_like = getLikes($post['ID']);
        //$strRec="INSERT INTO ranking_info(post_id,count_like) VALUE ($post['UserID'],)"

       // $strCount = "INSERT INTO ranking_info (post_id,count_like) VALUES ('".$post["ID"]."','".getLikes($post['ID']."')";
       $strSQL = "SELECT * FROM ranking_info WHERE post_id = '".$post["ID"]."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
 if($objResult) {
          $strCount = "UPDATE ranking_info SET post_id='".$post["ID"]."',count_like=$count_like WHERE post_id='".$post["ID"]."' ";
          $query = mysqli_query($objCon,$strCount);
        //   echo  $post['ID'];
        // echo $count_like;
 }
 else{
       $strCount = "INSERT INTO ranking_info (post_id,count_like) VALUES ('".$post["ID"]."',$count_like)";
        $query = mysqli_query($objCon,$strCount);
        // echo  $post['ID'];
        // echo $count_like;
 }
        ?>


<?php endforeach ?>



<script src="scripts.js"></script>
</body>

</html>
