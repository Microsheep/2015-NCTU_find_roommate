<?php
include_once("./asset/config.php");
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
function getdorm($conn,$place,$page,$max){
    $sql = "SELECT name,id FROM `dorm_data` WHERE dorm=\"" . $place . "\" order by auto_ID limit " . ($max*($page-1)) . "," . $max ;
    $result = mysql_query($sql, $conn) or die('MySL query error '.mysql_error().' '.$sql);
    $ary=array();
    while($row = mysql_fetch_array($result)){
        $ary[]=$row[0];
        $ary[]=$row[1];
    }
    mysql_free_result($result);
    return $ary;
}

?>
