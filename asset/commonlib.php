<?php
include_once("./asset/secret/config.php");
function getConnection($dbname){
    global $dbhost,$dbuser,$dbpass,$dbport;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "micro_dorm", $dbport) or die('Error with MySQL connection');
    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_select_db($conn,$dbname);
    return $conn;
}
function killConnection($conn){
    mysqli_close($conn);
    return;
}
function getlive($conn,$place,$roomid){
    $place = mysqli_real_escape_string($conn,$place);
    $roomid = mysqli_real_escape_string($conn,$roomid);
    $sql = "SELECT name,ID,email,fb,words,class FROM `dorm_data` WHERE dorm=\"" . $place . "\" and roomid=\"" . $roomid . "\" order by ID";
    $result = mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
    $ary=array();
    while($row = mysqli_fetch_array($result)){
        $ary[]=$row[0];
        $ary[]=$row[1];
        $ary[]=$row[2];
        $ary[]=$row[3];
        $ary[]=$row[4];
        $ary[]=$row[5];
    }
    mysqli_free_result($result);
    return $ary;
}
function getIDdata($conn,$ID){
    $ID = mysqli_real_escape_string($conn,$ID);
    $sql = "SELECT name,ID,email,fb,words,dorm,roomid,class FROM `dorm_data` WHERE ID like \"%" . $ID . "%\"";
    $result = mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
    $ary=array();
    while($row = mysqli_fetch_array($result)){
        $ary[]=$row[0];
        $ary[]=$row[1];
        $ary[]=$row[2];
        $ary[]=$row[3];
        $ary[]=$row[4];
        $ary[]=$row[5];
        $ary[]=$row[6];
        $ary[]=$row[7];
    }
    mysqli_free_result($result);
    return $ary;
}
function getnamedata($conn,$name){
    $name = mysqli_real_escape_string($conn,$name);
    $sql = "SELECT name,ID,email,fb,words,dorm,roomid,class FROM `dorm_data` WHERE name like \"%" . $name . "%\"";
    $result = mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
    $ary=array();
    while($row = mysqli_fetch_array($result)){
        $ary[]=$row[0];
        $ary[]=$row[1];
        $ary[]=$row[2];
        $ary[]=$row[3];
        $ary[]=$row[4];
        $ary[]=$row[5];
        $ary[]=$row[6];
        $ary[]=$row[7];
    }
    mysqli_free_result($result);
    return $ary;
}




?>
