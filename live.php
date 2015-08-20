<?php
    include_once("./header.php");
    if($_GET['place']=="girlA"){
        $place = "竹軒 A棟";
        $now_place = "竹軒";
        $get_roomid = "A" . (int)$_GET['roomid'];
    }
    else if($_GET['place']=="girlB"){
        $place = "竹軒 B棟";
        $now_place = "竹軒";
        $get_roomid = "B" . (int)$_GET['roomid'];
    }
    else if($_GET['place']=="twelve"){
        $place = "十二舍";
        $now_place = "十二舍";
        $get_roomid = (int)$_GET['roomid'];
    }
    else{
        $place = "十舍";
        $now_place = "十舍";
        $get_roomid = (int)$_GET['roomid'];
    }
    $roomid = (int)$_GET['roomid'];
    $floor = (int)$_GET['floor'];
    if($floor==0){
        $now_floor = "地下一";
    }
    else{
        $now_floor = $floor;
    }
    $conn = getConnection("micro_dorm");
    $ary = getlive($conn,$now_place,$get_roomid);
    $display = count($ary)/5;
    killConnection($conn);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友 
            <small>找找你跟誰住吧 ~</small>
        </h1>
        <ol class="breadcrumb">
            <?php
                echo "<li><a href=\"dorm.php?place=" . $_GET['place'] . "&floor=" . $_GET['floor'] . "\">" . $place . " " . $now_floor . "樓</a></li>";
                $now_roomid = str_pad($roomid, 3, "0", STR_PAD_LEFT);
                echo "<li class=\"active\">" . $now_roomid . "</li>";
            ?>
        </ol>
    </div>
</div>
<?php
    echo "<div class=\"row\">";
    for ( $i=0;$i<min($display,2);$i++ ){
        echo "<div class=\"col-md-6 portfolio-item\">";
        echo "<h2>" . $ary[$i*5] . "<span style=\"font-size:24px;\"> " . $ary[$i*5+1] . "</span></h2>";
        echo "<h4>FB : <a href=\"https://" . $ary[$i*5+3] . "\">" . $ary[$i*5+3] . "</a></h4>";
        echo "<h4>E-mail : <a href=\"mailto:" . $ary[$i*5+2] . "\"> " . $ary[$i*5+2] . "</a></h4>";
        echo "<div class=\"alert alert-warning\" role=\"alert\">";
        echo $ary[$i*5+4] . "</div>";
        echo "</div>";
    }
    echo "</div>";
    echo "<div class=\"row\">";
    for ( $i=2;$i<min($display,4);$i++ ){
        echo "<div class=\"col-md-6 portfolio-item\">";
        echo "<h2>" . $ary[$i*5] . "<span style=\"font-size:24px;\"> " . $ary[$i*5+1] . "</span></h2>";
        echo "<h4>FB : <a href=\"https://" . $ary[$i*5+3] . "\">" . $ary[$i*5+3] . "</a></h4>";
        echo "<h4>E-mail : <a href=\"mailto:" . $ary[$i*5+2] . "\"> " . $ary[$i*5+2] . "</a></h4>";
        echo "<div class=\"alert alert-warning\" role=\"alert\">";
        echo $ary[$i*5+4] . "</div>";
        echo "</div>";
    }
    echo "</div>";
?>    

<?php
    include_once("./footer.php");
?>
