<?php
include_once("./asset/commonlib.php");
// Set variable
$post_ID = $_POST['post_ID'];
$post_name = $_POST['post_name'];
$post_class = $_POST['post_class'];
$post_dorm = $_POST['post_dorm'];
$post_roomid = $_POST['post_roomid'];
if(strpos($post_roomid,"a")!==false){
    $post_roomid = "A" . substr($post_roomid, 1);
}
if(strpos($post_roomid,"b")!==false){
    $post_roomid = "B" . substr($post_roomid, 1);
}
$post_floor = substr($post_roomid, 0, -2);
if(strpos($post_floor,"A")!==false || strpos($post_floor,"B")!==false){
    $post_floor = substr($post_floor, 1);
}
$post_email = $_POST['post_email'];
$post_fb = $_POST['post_fb'];
$post_fb = explode("?",$post_fb)[0];
$pos = strpos($post_fb,":");
if($pos!==false){
    $post_fb = substr($post_fb, ($pos+3));
}
$post_words = $_POST['post_words'];
// Get Connection
$conn = getConnection("micro_dorm");
// Check if ID exist
$sql = "SELECT count(id) FROM `dorm_data` WHERE id=". $_POST['post_ID'];
$result = mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
$ary = mysqli_fetch_array($result);
//Insert item
if($ary[0]==0){
    mysqli_free_result($result);
    $sql = "INSERT INTO dorm_data(ID,name,class,dorm,roomid,floor,email,fb,words) VALUES (\"$post_ID\",\"$post_name\",\"$post_class\",\"$post_dorm\",\"$post_roomid\",\"$post_floor\",\"$post_email\",\"$post_fb\",\"$post_words\")";
    mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
    killConnection($conn);
    header("Location: ./give_data.php?status=OK&id=".$post_ID); 
}
else{
    mysqli_free_result($result);
    killConnection($conn);
    header("Location: ./give_data.php?status=SameID&id=".$post_ID);
}
?>
