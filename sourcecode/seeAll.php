<?php
	session_start();
	include('server.php');
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.box {
			text-align: center;
			margin-bottom: 2%;
			background-color: #fffff;
			height: 500px;


		}

		.colum {
			float: left;
			width: 25%;
			margin-left: 50px;

		}
		.colum2 {
			float: left;
			width: 100%;
			margin-left: 50px;

		}


	</style>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css.css">
	<title>Mixthy See All</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="main.css">
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
	<!-- test sql -->

	<!-- ********* -->


	<?php

		// Connect to database

	if($_SESSION["UserID"] == "")
	{ ?>
			<script type='text/javascript'>alert('please login');window.location.href='login.php';</script>"
	<?php exit();
	}


	else {

	?>


	<div class="content">
		<h1>Collection</h1>
	</div>
	<h1>WELLCOME userID:
		<?php echo $objResult["UserID"];?>
	</h1>
	<?php
		?>
<div class="box_container">
	<?php foreach ($posts as $post): ?>
	<a href="showpost.php?id=<?php echo $post['ID']; ?>">
	<?php
			if($post['fullID']!=""){ ?>
	<div class="box colum">
	<?php
				$full="SELECT image FROM full WHERE fullID = '".$post['fullID']."'";
				$objQuery = mysqli_query($objCon,$full);
			 $objResult = mysqli_fetch_array($objQuery);
			 $fullPic=$objResult["image"];
					 echo '<img src="'.$fullPic.'" width="250"  height="450">';
?>
</a>
					 <div class="post-info">
					 <!-- if user likes post, style button differently -->
					 <i <?php if (userLiked($post[ 'ID'])): ?> class="fa fa-thumbs-up like-btn"
						 <?php else: ?> class="fa fa-thumbs-o-up like-btn"
						 <?php endif ?> data-id="
						 <?php echo $post['ID'] ?>"></i>
					 <span class="likes">
						 <?php echo getLikes($post['ID']); ?>
					 </span>
			</div>

			<?php }
							 else{
	?>
	</div>
	<a href="showpost.php?id=<?php echo $post['ID']; ?>">
	<div class="box colum">

		<div>
			<?php
				$shirt= "SELECT image FROM shirts WHERE shirtID ='".$post['shirtID']."'";
				$objQuery = mysqli_query($objCon,$shirt);
				$objResult = mysqli_fetch_array($objQuery);
				$shirtPic=$objResult["image"];
		echo '<img src="'.$shirtPic.'" width="150"  height="150">';
			//   echo $post['shirtID'];?>
		</div>
		<div>
			<?php
			$pant= "SELECT image FROM pants WHERE pantID ='".$post['pantID']."'";
			$objQuery = mysqli_query($objCon,$pant);
			$objResult = mysqli_fetch_array($objQuery);
			$pantPic=$objResult["image"];
		echo '<img src="'.$pantPic.'" width="150"  height="150">';
			//   echo $post['pantID'];?>
		</div>
		<div>
			<?php	$shoe= "SELECT image FROM shoes WHERE shoeID ='".$post['shoeID']."'";
			$objQuery = mysqli_query($objCon,$shoe);
			$objResult = mysqli_fetch_array($objQuery);
			$shoePic=$objResult["image"];
		echo '<img src="'.$shoePic.'" width="150"  height="150">';
			//   echo $post['shoeID'];

			  ?>
		</div>
		</a>
		<div class="post-info">
			<!-- if user likes post, style button differently -->
			<i <?php if (userLiked($post[ 'ID'])): ?> class="fa fa-thumbs-up like-btn"
				<?php else: ?> class="fa fa-thumbs-o-up like-btn"
				<?php endif ?> data-id="
				<?php echo $post['ID'] ?>"></i>
			<span class="likes">
				<?php echo getLikes($post['ID']); ?>
			</span>
		</div>
					 </div> <?php } ?>

	<?php endforeach ?>
</div>
	<script src="scripts.js"></script>

	<div class="colum2 left">
		<a href="index.php" class="button">Back</a>

	</div>
<?php } ?>
</body>

</html>
