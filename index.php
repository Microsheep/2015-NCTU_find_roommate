<?php
    include_once("./header.php");
    $conn = getConnection("micro_dorm");
    // Check if ID exist
    $sql = "SELECT count(id) FROM `dorm_data`";
    $result = mysqli_query($conn, $sql) or die('MySQL query error '.mysqli_error().' '.$sql);
    $ary = mysqli_fetch_array($result);
    killConnection($conn);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友
            <small>找出你可愛的室友 ~</small>
        </h1>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h4>系統使用方法</h4>
    </div>
    <div class="panel-body">
        <h4>1. 到<a href="http://dormapply2.adm.nctu.edu.tw/freshman_query/">住宿服務組的網站</a>查出自己住在哪裡</h4>
        <h4>2. 點選上方 <a href="./give_data.php?status=normal">"填資料"</a></h4>
        <h4>3. 依照表單內容填寫並送出 (有必填與非必填)</h4>
        <h4>4. 使用<a href ="./search.php">搜尋功能</a>或是上方各宿舍的列表找到自己的室友</h4>
        <h4>5. 大功告成！ 若有任何問題，歡迎使用右上角的聯絡我們與我們聯繫！</h4>
        <h4>6. 覺得學聯會很棒嗎？ <a href="https://www.facebook.com/NctuStUnion">幫忙學聯會按個讚吧！</a>也歡迎大家加入學聯會唷~</h4>
    </div>
</div>
<div class="alert alert-info" role="alert">
    目前已有 <?php echo $ary[0];?> 人填寫資料
</div>

<?php
    include_once("./footer.php");
?>
