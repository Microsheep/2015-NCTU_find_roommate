<?php
include_once("./header.php");
// Get Connection
$conn = getConnection("micro_dorm");
$ID_ary = getIDdata($conn,$_POST['post_ID']);
killConnection($conn);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友
            <small>搜出你可愛的室友 ~</small>
        </h1>
    </div>
</div>
<div class="alert alert-success" role="alert">搜尋 " <?php echo $_POST['post_ID'];?> " 的結果，共有 <?php echo count($ID_ary)/8;?> 筆</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h4>我的室友在哪裡？</h4>
    </div>
    <div class="panel-body">
        <?php
            if(count($ID_ary)!=0){
                for($i=0;$i<count($ID_ary)/8;$i++){
                    echo "<div class=\"col-md-12 portfolio-item\">";
                    echo "<h2>" . $ID_ary[$i*8+5] . " " . $ID_ary[$i*8+6] . " : " . $ID_ary[$i*8+0] . "<span style=\"font-size:24px;\"> " . $ID_ary[$i*8+1] . "</span></h2>";
                    echo "<h4>科系 : " . $ID_ary[$i*8+7] . "</a></h4>";
                    echo "<h4>FB : <a href=\"https://" . $ID_ary[$i*8+3] . "\">" . $ID_ary[$i*8+3] . "</a></h4>";
                    echo "<h4>E-mail : <a href=\"mailto:" . $ID_ary[$i*8+2] . "\"> " . $ID_ary[$i*8+2] . "</a></h4>";
                    echo "<div class=\"alert alert-warning\" role=\"alert\">";
                    echo $ID_ary[$i*8+4] . "</div>";
                    echo "</div>";
                }
            }
            else{
                echo "查無資料！";
            }
        ?>
        <a class="btn btn-primary" href="./search.php">返回搜尋</a>
    </div>
</div>
<?php
include_once("./footer.php");
?>
