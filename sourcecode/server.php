
<?php
include('config.php');

// ob_start();
// connect to database
//แก้ไข******

// lets assume a user is logged in with id $user_id



// $user_id ="SELECT * FROM 'user' WHERE username=$_SESSION['name'] ";

// $user_id = $_SESSION["UserID"];
// echo "WellCome";
// echo $_SESSION["UserID"];
if($_SESSION["UserID"] == "")    {
  $user_id=0;
}
else{
$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION["UserID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$user_id=$objResult["UserID"];
}
if (!$objCon) {
  die("Error connecting to database: " . mysqli_connect_error($objCon));
  exit();
}

// if user clicks like or dislike button
if (isset($_POST['action'])) {
  $post_id = $_POST['post_id'];
  $action = $_POST['action'];
  switch ($action) {
  	case 'like':
         $sql="INSERT INTO rating_info (user_id, post_id, rating_action)
         	   VALUES ($user_id, $post_id, 'like')
         	   ON DUPLICATE KEY UPDATE rating_action='like'";
         break;
  	case 'dislike':
          $sql="INSERT INTO rating_info (user_id, post_id, rating_action)
               VALUES ($user_id, $post_id, 'dislike')
         	   ON DUPLICATE KEY UPDATE rating_action='dislike'";
         break;
  	case 'unlike':
	      $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
	      break;
  	case 'undislike':
      	  $sql="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
      break;
  	default:
  		break;
  }

  // execute query to effect changes in the database ...
  mysqli_query($objCon, $sql);
  echo getRating($post_id);
  exit(0);
}

// Get total number of likes for a particular post
function getLikes($id)
{
  global $objCon;

  $sql = "SELECT COUNT(*) FROM rating_info
            WHERE post_id = $id AND rating_action='like'";

  $rs = mysqli_query($objCon, $sql);
  $result = mysqli_fetch_array($rs);

  return $result[0];
}

// Get total number of dislikes for a particular post
function getDislikes($id)
{
  global $objCon;
  $sql = "SELECT COUNT(*) FROM rating_info
            WHERE post_id = $id AND rating_action='dislike'";

  $rs = mysqli_query($objCon, $sql);
  $result = mysqli_fetch_array($rs);

  return $result[0];
}

// Get total number of likes and dislikes for a particular post
function getRating($id)
{
  global $objCon;
  $rating = array();
  $likes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='like'";
  $dislikes_query = "SELECT COUNT(*) FROM rating_info
		  			WHERE post_id = $id AND rating_action='dislike'";
  $likes_rs = mysqli_query($objCon, $likes_query);
  $dislikes_rs = mysqli_query($objCon, $dislikes_query);
  $likes = mysqli_fetch_array($likes_rs);
  $dislikes = mysqli_fetch_array($dislikes_rs);
  $rating = [
  	'likes' => $likes[0],
  	'dislikes' => $dislikes[0]
  ];
  return json_encode($rating);
}

// Check if user already likes post or not
function userLiked($post_id)
{
  global $objCon;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id=$user_id
  		  AND post_id=$post_id AND rating_action='like'";
  $result = mysqli_query($objCon, $sql);
  if (mysqli_num_rows($result) > 0) {
  	return true;
  }else{
  	return false;
  }
}

// Check if user already dislikes post or not
function userDisliked($post_id)
{
  global $objCon;
  global $user_id;
  $sql = "SELECT * FROM rating_info WHERE user_id=$user_id
  		  AND post_id=$post_id AND rating_action='dislike'";
  $result = mysqli_query($objCon, $sql);
  if (mysqli_num_rows($result) > 0) {
  	return true;
  }else{
  	return false;
  }
}

$sql = "SELECT * FROM uniform";
$result = mysqli_query($objCon, $sql);
// fetch all posts from database
// return them as an associative array called $posts
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
