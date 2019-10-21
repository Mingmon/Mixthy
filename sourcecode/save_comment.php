<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';



    $sql = "INSERT INTO comment (comment,uniform_id,userID) VALUES('".$_POST['detail']."','".$_POST['id']."','".$_POST['userID']."') ";
    $query = mysqli_query($objCon,$sql);

    // update

    if ($query == TRUE) {
      echo  "<script type='text/javascript'>alert('success');window.location.href='showpost.php?id=$_POST[id]';</script>" ;
    }
    else{
        echo  "<script type='text/javascript'>alert('ERROR');window.location.href='showpost.php?id=$_POST[id]';</script>" ;
    }

}
