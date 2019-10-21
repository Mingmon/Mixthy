<?php session_start(); ?>

<html>
<?php include('server.php') ?>
<?php  $sql="SELECT * FROM uniform WHERE ID='{$_GET['id']}'";
mysqli_query($objCon,"SET NAMES tis-620");
    $query= mysqli_query($objCon,$sql);
    $result = mysqli_fetch_assoc($query);
    // Comment
    $sql_c = "SELECT * FROM comment WHERE uniform_id='{$_GET['id']}'";
    mysqli_query($objCon,"SET NAMES tis-620");
 $query_c = mysqli_query($objCon, $sql_c);
 $rows_c = mysqli_fetch_all($query_c, MYSQLI_ASSOC);
?>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=tis-620" />
  <link rel="stylesheet" href="./css.css">
  <link rel="stylesheet" href="./mix&match.css">
  <link rel="stylesheet" href="./showpost.css">

</head>

<body>







  <!-- ถ้ามี ตัวเต็ม -->








  <?php if($result['fullID']!=""){
 $full="SELECT image FROM full WHERE fullID = '".$result['fullID']."'";
 $objQuery = mysqli_query($objCon,$full);
$objResult = mysqli_fetch_array($objQuery);
$fullPic=$objResult["image"];

  ?>

  <div class="right">
    <h1>User Comment :</h1>
    <?php foreach($rows_c as $row): ?>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000"
      style="margin-top:10px;">
      <tr>
        <td>
          <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
            <tr>
              <td width="30%" style="text-align: right;"><strong>UserName : </strong></td>
              <td width="70%">
                <?php $sql= "SELECT * FROM member WHERE userID='{$row['userID']}'";
  $objQuery = mysqli_query($objCon,$sql);
  $result_userid = mysqli_fetch_array($objQuery);


  echo $result_userid['Username']; ?></td>
            <tr>
              <td valign="top" style="text-align: right;"><strong>Comment : </strong></td>
              <td><?php echo $row['comment']; ?></td>
            </tr>
      </tr>
      </tr>
    </table>
    </td>
    </tr>
    </table>
    <?php  endforeach ?>
  </div>
  <div class="left">
    <h1> SHOW POST ID: <?php echo $result['ID']; ?></h1>
    <div>
      <h2>คำอธิบาย : <?php echo $result['clothesDesc'];?></h2>
    </div>
    <?php echo '<img src="'.$fullPic.'" width="300"  height="400">'; ?>
    <h1>Comment: </h1>
    <form id="add_comment" name="add_coment" method="post" action="save_comment.php">
      <input type="text" name="detail" style="width:100%;height:100px;">
      <input type="hidden" name="id" value="<?php echo $result['ID']; ?>">
      <input type="hidden" name="userID" value="<?php echo $_SESSION["UserID"]; ?>">
      <div class="box-comment-submit">
        <div style="width:50%;">
          <input class="button-comment" type="button" name="back" value="back"
            onclick="window.location='seeAll.php';" />
        </div>
        <div style="width:50%;">
          <input class="button-comment" type="submit" name="submit" value="submit" />
        </div>
      </div>
    </form>
  </div>
  <!-- ******** -->
  <?php
}
// ถ้าไม่มีรูปตัวเต็ม
else {?>
  <div class="left">

    <h1> SHOW POST ID: <?php echo $result['ID']; ?></h1>
    <h2>คำอธิบาย : <?php echo $result['clothesDesc'];?></h2>
    <div style="text-align: center;">
      <h2>Shirt : </h2>
      <div>
        <?php
$shirt= "SELECT image FROM shirts WHERE shirtID ='".$result['shirtID']."'";
$objQuery = mysqli_query($objCon,$shirt);
$objResult = mysqli_fetch_array($objQuery);
$shirtPic=$objResult["image"];
  echo '<img src="'.$shirtPic.'" width="150"  height="150">';
   //   echo $post['shirtID'];?> </div>
      <h2>Pant : </h2>
      <div>
        <?php
   $pant= "SELECT image FROM pants WHERE pantID ='".$result['pantID']."'";
   $objQuery = mysqli_query($objCon,$pant);
   $objResult = mysqli_fetch_array($objQuery);
   $pantPic=$objResult["image"];
  echo '<img src="'.$pantPic.'" width="150"  height="150">';
   //   echo $post['pantID'];?> </div>
      <h2>Shoe : </h2>
      <div>
        <?php $shoe= "SELECT image FROM shoes WHERE shoeID ='".$result['shoeID']."'";
   $objQuery = mysqli_query($objCon,$shoe);
   $objResult = mysqli_fetch_array($objQuery);
   $shoePic=$objResult["image"];
  echo '<img src="'.$shoePic.'" width="150"  height="150">';
   //   echo $post['shoeID'];

     ?></div>
    </div>
    <h1>Comment: </h1>
    <form id="add_comment" name="add_coment" method="post" action="save_comment.php">
      <input type="text" name="detail" style="width:100%;height:100px;">
      <input type="hidden" name="id" value="<?php echo $result['ID']; ?>">
      <input type="hidden" name="userID" value="<?php echo $_SESSION["UserID"]; ?>">
      <div class="box-comment-submit">
        <div style="width:50%;">
          <input class="button-comment" type="button" name="back" value="back"
            onclick="window.location='seeAll.php';" />
        </div>
        <div style="width:50%;">
          <input class="button-comment" type="submit" name="submit" value="submit" />
        </div>
      </div>
    </form>
  </div>
  <div class="right">
    <h1>User Comment :</h1>
    <?php foreach($rows_c as $row){ ?>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000"
      style="margin-top:10px;">
      <tr>
        <td>
          <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
            <tr>
              <td width="30%" style="text-align: right;"><strong>UserName : </strong></td>
              <td width="70%">
                <?php $sql= "SELECT * FROM member WHERE userID='{$row['userID']}'";
     $objQuery = mysqli_query($objCon,$sql);
     $result_userid = mysqli_fetch_array($objQuery);


     echo $result_userid['Username']; ?></td>
            <tr>
              <td valign="top" style="text-align: right;"><strong>Comment : </strong></td>
              <td><?php echo $row['comment']; ?></td>
            </tr>
      </tr>
      </tr>
    </table>
    </td>
    </tr>
    </table>

    <?php  } ?>
  </div>
  <?php } ?>

</body>


</html>