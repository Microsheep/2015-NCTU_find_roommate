<?php
include_once("./header.php");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            交大新生找室友
            <small>搜出你可愛的室友 ~</small>
        </h1>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h4>我的室友在哪裡？</h4>
    </div>
    <div class="panel-body">
        <form name="search_name" action="search_result_name.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="_name">以姓名查詢 (模糊搜尋)</label>
                        <input type="text" class="form-control" name="post_name" id="_name" placeholder="EX: 王小名 老王"><br>
                        <div class="alert alert-danger" role="alert" id="A_name" style="display:none">
                            姓名不可以為空！
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <input class="btn btn-primary" type="button" value="姓名搜尋" onClick="check_name()">
                </div>
            </div><br>
        </form>
        <form name="search_ID" action="search_result_ID.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="_ID">以學號查詢</label>
                        <input type="text" class="form-control" name="post_ID" id="_ID" placeholder="EX: 0123456"><br>
                        <div class="alert alert-danger" role="alert" id="A_ID" style="display:none">
                            學號錯誤！
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <input class="btn btn-primary" type="button" value="學號搜尋" onClick="check_ID()">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
function check_ID(){
    if(document.getElementById("_ID").value.length==7) {
        search_ID.submit();
    }
    else{
        document.getElementById("A_ID").style.display="";
    }
}
function check_name(){
    if(document.getElementById("_name").value!="") {
        search_name.submit();
    }
    else{
        document.getElementById("A_name").style.display="";
    }
}
</script>
<script src=./asset/no_enter.js></script>

<?php
include_once("./footer.php");
?>
