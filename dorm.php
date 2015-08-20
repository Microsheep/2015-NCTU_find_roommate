<?php
    include_once("./header.php");
    if($_GET['place']=="girlA"){
        $place = "竹軒 A棟";
    }
    else if($_GET['place']=="girlB"){
        $place = "竹軒 B棟";
    }
    else if($_GET['place']=="twelve"){
        $place = "十二舍";
    }
    else{
        $place = "十舍";
    }
    $floor = (int)$_GET['floor'];
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友 
            <small>
                <?php
                    if($floor==0){
                        $now_floor = "地下一";
                    }
                    else{
                        $now_floor = $floor;
                    }
                    echo $place . $now_floor . "樓"
                ?>
            </small>
        </h1>
    </div>
</div>
<div class="row">
<?php
    for ( $i=$floorplan[$place][$floor][0];$i<=$floorplan[$place][$floor][1];$i++ ){
        $now_i = str_pad($i, 3, "0", STR_PAD_LEFT);
        echo "<div class=\"col-md-4 portfolio-item\">";
        echo "<h3>";
        echo "<a href=\"live.php?place=" . $_GET['place'] . "&floor=" . $floor . "&roomid=" . $now_i . "\">" . $now_i . "</a>";
        echo "</h3>";
        echo "<h4>" . $place . " " . $now_floor . "樓</h4>";
        echo "<p></p>";
        echo "</div>";
    }
?>    
</div>

<?php
    include_once("./footer.php");
?>
