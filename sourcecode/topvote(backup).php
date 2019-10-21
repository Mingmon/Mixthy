<?php
include('server.php');

//$sql = "SELECT * FROM uniform WHERE ID = 11";
//$query = mysqli_query($objCon, $sql);
?>

<html>
<head>
<style>
		.box {
			text-align: center;
			margin-bottom: 2%;
			background-color: #ffffff;
			height: 500px;


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
	<title>Mixthy SeeAll</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<?php
  //  $result = mysqli_fetch_assoc($query);
?>

<body>
    <!-- <h1>SHOW 1 DATA</h1>
    <div>
        <span> <?//php echo $result['image']; ?> </span>
    </div> -->
    <div class="content">
    <h1>Top vote</h1>
    </div>
    <div>
      <?php
    $sql = "SELECT * FROM ranking_info ORDER BY count_like DESC";
$result = mysqli_query($objCon, $sql);
// fetch all posts from database
// return them as an associative array called $posts
$tops = mysqli_fetch_all($result, MYSQLI_ASSOC);?>
    <?php foreach ($tops as $top): ?>
<?php
// echo $top['post_id'];

?>
<div class="box colum">
  <h1>Like : <?php echo $top['count_like'];?> </h1>
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
        

		
	</div>
 <?php endforeach ?>
 <div class="colum right">  
     <a  href="seeall.php" class="button">See All</a>
            
        </div>       
    </div>
  
  
 
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
