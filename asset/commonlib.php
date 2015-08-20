<?php
include_once("./asset/secret/config.php");
function getConnection($dbname){
    global $dbhost,$dbuser,$dbpass;
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname);
    return $conn;
}
function killConnection($conn){
    mysql_close($conn);
    return;
}
function getlive($conn,$place,$roomid){    
    $sql = "SELECT name,ID,email,fb,words FROM `dorm_data` WHERE dorm=\"" . $place . "\" and roomid=\"" . $roomid . "\" order by ID";
    $result = mysql_query($sql, $conn) or die('MySL query error '.mysql_error().' '.$sql);
    $ary=array();
    while($row = mysql_fetch_array($result)){
        $ary[]=$row[0];
        $ary[]=$row[1];
        $ary[]=$row[2];
        $ary[]=$row[3];
        $ary[]=$row[4];
    }
    mysql_free_result($result);
    return $ary;
}

?>
