<?php
include_once("./asset/commonlib.php");
// Set variable
$post_ID = $_POST['post_ID'];
$post_name = $_POST['post_name'];
$post_dorm = $_POST['post_dorm'];
$post_roomid = $_POST['post_roomid'];
$post_floor = substr($post_roomid, 0, -2);
$post_email = $_POST['post_email'];
$post_fb = $_POST['post_fb'];
$post_words = $_POST['post_words'];
// Get Connection
$conn = getConnection("micro_dorm");
// Check if ID exist
$sql = "SELECT count(id) FROM `dorm_data` WHERE id=". $_POST['post_ID'];
$result = mysql_query($sql, $conn) or die('MySL query error '.mysql_error().' '.$sql);
$ary = mysql_fetch_array($result);
//Insert item
if($ary[0]==0){
    mysql_free_result($result);
    $sql = "INSERT INTO dorm_data(ID,name,dorm,roomid,floor,email,fb,words) VALUES (\"$post_ID\",\"$post_name\",\"$post_dorm\",\"$post_roomid\",\"$post_floor\",\"$post_email\",\"$post_fb\",\"$post_words\")";
    echo $sql;
    mysql_query($sql, $conn) or die('MySQL query error '.mysql_error().' '.$sql);
    killConnection($conn);
    header("Location: ./give_data.php?status=OK&id=".$post_ID); 
}
else{
    mysql_free_result($result);
    killConnection($conn);
    header("Location: ./give_data.php?status=SameID&id=".$post_ID);
}
?>
