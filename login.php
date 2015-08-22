<?php
include_once("./asset/analyticstracking.php");
include_once("./asset/secret/config.php");
session_start();
if(! empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] == 'true') {
    header('Location: ./index.php');
}
$password = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["password"])) {
        $password = $_POST["password"];
        global $ans;
        if($password == $ans) {
            $_SESSION["authenticated"] = 'true';
            header('Location: ./index.php');
        }
        else {
            header('Location: ./login.php?status=0');
        }
    } else {
        header('Location: ./login.php?status=1');
    }
} else {
?>
<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="交大新生找室友">
    <meta name="author" content="交大學聯會 資訊部">
    <meta name="keywords" content="交大新生找室友,NCTU新生找室友,交大新生,NCTU新生,找室友,交大學聯會,交大,NCTU">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="./asset/public/logo.PNG">
    <title>交大新生找室友</title>
    <!-- Bootstrap Core CSS -->
    <link href="./asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./asset/micro.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">交大新生 找室友</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="alert alert-warning" role="alert">請先輸入密碼！密碼會在8/28公布在FB交大08版！若有任何問題可以與學聯會聯繫！</div> 
    <div class=row>
        <div class="col-md-4">
            <form id="login" method="post">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form control" id="password" name="password" type="password" placeholder="密碼" required>                    
                    <input class="btn btn-primary" type="submit" value="登入">
                </div>
            </form>
        </div>
        <?php
            $a = $_GET['status'] ? 0:1;
            if($a){
                echo "<div class=\"col-md-2\">";
                echo "<div class=\"alert alert-danger\" role=\"alert\">密碼錯誤！</div>";
                echo "</div>";
            }
        ?>
    </div>
<div class="panel panel-info">
    <div class="panel-heading" style="text-align:center">
        <h4>聯絡我們</h4>
    </div>
    <div class="panel-body">
        <h3><b>如果有任何問題，歡迎FB私訊學聯會粉絲專頁或是寄信給學聯會，我們會儘快為您處理！</b></h3><br>
        <h4>學聯會 FB 粉專 : <a href="https://www.facebook.com/NctuStUnion">www.facebook.com/NctuStUnion</a></h4>
        <h4>學聯會 E-mail : <a href="mailto:stu.nctu@gmail.com">stu.nctu@gmail.com</a></h4>
        <h4>學聯會 網路新生包 : <a href="https://stunion.nctu.edu.tw/2015newcomer/">stunion.nctu.edu.tw/2015newcomer/</a></h4>
        <h4>學聯會 新生提問系統 : <a href="https://stunion.nctu.edu.tw/question/">stunion.nctu.edu.tw/question/</a></h4>
        <h4>學聯會 會網 : <a href="https://stunion.nctu.edu.tw/home/">stunion.nctu.edu.tw/home/</a></h4>
    </div>
</div>
</div>
<!-- Footer -->
    <footer class="footer">
        <h5 style="text-align: center; color: white"><i class="fa fa-copyright"></i> 2015 交大學聯會 資訊部 Created by : <a href="https://github.com/Microsheep">Microsheep</a></h5>
        <h6 style="text-align: center; color: white">建議使用Google Chrome或Mozilla Firefox以獲得最佳瀏覽效果</h6>
    </footer>
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>
