<?php
    include_once("./header.php");
    $conn = getConnection("micro_dorm");
    if($_GET['place']=="girl"){
        $place = "竹軒";
    }
    else if($_GET['place']=="twelve"){
        $place = "十二舍";
    }
    else{
        $place = "十舍";
    }
    $page = (int)$_GET['page'] ? (int)$_GET['page'] : 1;
    $max = 9;
    $ary = getdorm($conn,$place,$page,$max);
    $display = count($ary)/2;
    killConnection($conn);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友 
            <small>找找你跟誰住吧 ~</small>
        </h1>
    </div>
</div>
<!-- Projects Row -->
<div class="row">
<?php
    for ( $i=0;$i<$display;$i++ ){
        echo "<div class=\"col-md-4 portfolio-item\">";
        echo "<h3>";
        echo "<a href=\"\">" . $ary[$i*2] . "</a>";
        echo "</h3>";
        echo "<h4>" . $ary[$i*2+1] . "</h4>";
        echo "<p></p>";
        echo "</div>";
    }
?>    
</div>

<?php
    include_once("./footer.php");
?>
