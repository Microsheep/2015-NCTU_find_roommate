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
    <script src="./asset/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./asset/sweetalert.css">
</head>
<?php
    require_once("./asset/authenticate.php");
    include_once("./asset/commonlib.php");
    include_once("./asset/data.php");
?>
<body>
<?php
    include_once("./asset/analyticstracking.php");
?>
    <!-- Navigation -->
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
                <a class="navbar-brand" href="./index.php">交大新生 找室友</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>                        
                        <a href="./search.php">搜尋</a>
                    <li>
                    <li>
                        <a href="./give_data.php?status=normal">填資料</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">十舍 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./dorm.php?place=ten&floor=1">一樓</a></li>
                            <li><a href="./dorm.php?place=ten&floor=2">二樓</a></li>
                            <li><a href="./dorm.php?place=ten&floor=3">三樓</a></li>
                            <li><a href="./dorm.php?place=ten&floor=4">四樓</a></li>
                            <li><a href="./dorm.php?place=ten&floor=5">五樓</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">十二舍 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./dorm.php?place=twelve&floor=1">一樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=2">二樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=3">三樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=4">四樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=5">五樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=6">六樓</a></li>
                            <li><a href="./dorm.php?place=twelve&floor=7">七樓</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">竹軒 A <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./dorm.php?place=girlA&floor=1">一樓</a></li>
                            <li><a href="./dorm.php?place=girlA&floor=2">二樓</a></li>
                            <li><a href="./dorm.php?place=girlA&floor=3">三樓</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">竹軒 B <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./dorm.php?place=girlB&floor=0">地下一樓</a></li>
                            <li><a href="./dorm.php?place=girlB&floor=1">一樓</a></li>
                            <li><a href="./dorm.php?place=girlB&floor=2">二樓</a></li>
                            <li><a href="./dorm.php?place=girlB&floor=3">三樓</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="./contact.php">聯絡我們</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
