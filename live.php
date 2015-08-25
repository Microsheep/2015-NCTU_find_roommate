<?php
    include_once("./header.php");
    $floor = (int)$_GET['floor'];
    $roomid = (int)$_GET['roomid'];
    global $floorplan;
    if($_GET['place']=="girlA"){
        $place = "竹軒 A棟";
        $now_place = "竹軒";
        if($floor<1||$floor>3){
            die("<script>location.href = './index.php'</script>");
        }
        $get_roomid = "A" . $roomid;
    }
    else if($_GET['place']=="girlB"){
        $place = "竹軒 B棟";
        $now_place = "竹軒";
        if($floor<0||$floor>3){
            die("<script>location.href = './index.php'</script>");
        }
        $get_roomid = "B" . $roomid;
    }
    else if($_GET['place']=="twelve"){
        $place = "十二舍";
        $now_place = "十二舍";
        if($floor<1||$floor>7){
            die("<script>location.href = './index.php'</script>");
        }
        $get_roomid = $roomid;
    }
    else if($_GET['place']=="ten"){
        $place = "十舍";
        $now_place = "十舍";
        if($floor<1||$floor>5){
            die("<script>location.href = './index.php'</script>");
        }
        $get_roomid = $roomid;
    }
    else{
        die("<script>location.href = './index.php'</script>");
    }
    if($floorplan[$place][$floor][0]>$roomid||$floorplan[$place][$floor][1]<$roomid){
        die("<script>location.href = './index.php'</script>"); 
    }
    if($floor==0){
        $now_floor = "地下一";
    }
    else{
        $now_floor = $floor;
    }
    $conn = getConnection("micro_dorm");
    $ary = getlive($conn,$now_place,$get_roomid);
    $display = count($ary)/6;
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
        echo "<h2>" . $ary[$i*6] . "<span style=\"font-size:24px;\"> " . $ary[$i*6+1] . "</span></h2>";
        echo "<h4>科系 : " . $ary[$i*6+5] . "</a></h4>";
        echo "<h4>FB : <a href=\"https://" . $ary[$i*6+3] . "\">" . $ary[$i*6+3] . "</a></h4>";
        echo "<h4>E-mail : <a href=\"mailto:" . $ary[$i*6+2] . "\"> " . $ary[$i*6+2] . "</a></h4>";
        echo "<div class=\"alert alert-warning\" role=\"alert\">";
        echo $ary[$i*6+4] . "</div>";
        echo "</div>";
    }
    echo "</div>";
    echo "<div class=\"row\">";
    for ( $i=2;$i<min($display,4);$i++ ){
        echo "<div class=\"col-md-6 portfolio-item\">";
        echo "<h2>" . $ary[$i*6] . "<span style=\"font-size:24px;\"> " . $ary[$i*6+1] . "</span></h2>";
        echo "<h4>科系 : " . $ary[$i*6+5] . "</a></h4>";
        echo "<h4>FB : <a href=\"https://" . $ary[$i*6+3] . "\">" . $ary[$i*6+3] . "</a></h4>";
        echo "<h4>E-mail : <a href=\"mailto:" . $ary[$i*6+2] . "\"> " . $ary[$i*6+2] . "</a></h4>";
        echo "<div class=\"alert alert-warning\" role=\"alert\">";
        echo $ary[$i*6+4] . "</div>";
        echo "</div>";
    }
    echo "</div>";
?>    

<?php
    include_once("./footer.php");
?>
