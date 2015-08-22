<?php
include_once("./header.php");
?>

<?php
if($_GET['status']=="normal"){
    echo "<div class=\"alert alert-warning\" role=\"alert\">";
    echo "請勿填寫非本人的資料，否則自負法律責任！";
    echo "</div>";
}
elseif($_GET['status']=="OK"){
    echo "<div class=\"alert alert-success\" role=\"alert\">";
    echo "已新增資料 學號：" . $_GET['id'] . "！";
    echo "</div>";
}
elseif($_GET['status']=="SameID"){
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "此學號 ( " . $_GET['id'] .  " ) 已存在資料！若您確定這是一個錯誤，請聯絡網站管理員。(見上方聯絡我們)";
    echo "</div>";
}
?>
<form name="dorm" action="send_post.php" method="post">
    <div class="form-group">
        <label for="_ID"><font color="red">您的學號 (必填)</font></label>
        <input type="text" class="form-control" name="post_ID" id="_ID" placeholder="EX: 0123456"><br>
        <div class="alert alert-danger" role="alert" id="A_ID" style="display:none">
            學號錯誤！
        </div>
        <label for="_name"><font color="red">您的大名 (必填)</font></label>
        <input type="text" class="form-control" name="post_name" id="_name" placeholder="EX: 王大明"><br>
        <div class="alert alert-danger" role="alert" id="A_name" style="display:none">
            姓名不可以為空！
        </div>
        <label for="_class"><font color="red">您的科系 (必填)</font></label><br>
        <select class="form-control" name="post_class" id="_class">
            <option>請選擇自己的科系</option>
            <option>電機資訊學士班</option>
            <option>奈米科學及工程學士學位學程</option>
            <option>電子工程學系</option>
            <option>電機工程學系</option>
            <option>光電工程學系</option>
            <option>資訊工程學系</option>
            <option>材料科學與工程學系</option>
            <option>機械工程學系</option>
            <option>土木工程學系</option>
            <option>電子物理學系</option>
            <option>應用化學系</option>
            <option>應用數學系</option>
            <option>生物科技學系</option>
            <option>資訊管理與財務金融學系</option>
            <option>管理科學系</option>
            <option>運輸與物流管理學系</option>
            <option>工業工程與管理學系</option>
            <option>外國語文學系</option>
            <option>傳播與科技學系</option>
            <option>人文社會學系</option>
        </select><br>
        <div class="alert alert-danger" role="alert" id="A_class" style="display:none">
            請選擇科系！
        </div>
        <label for="_dorm"><font color="red">您的宿舍 (必填)</font></label><br>
        <select class="form-control" name="post_dorm" id="_dorm">
            <option>請選擇自己的宿舍</option>
            <option>十舍</option>
            <option>十二舍</option>
            <option>竹軒</option>
        </select><br>
        <div class="alert alert-danger" role="alert" id="A_dorm" style="display:none">
            請選擇宿舍！
        </div>
        <label for="_roomid"><font color="red">您的房號 - 十舍、十二舍為XXX、竹軒為AXXX或BXXX (必填)</font></label> 
        <input type="text" class="form-control" name="post_roomid" id="_roomid" placeholder="EX: 119 A101 B102"><br>
        <div class="alert alert-danger" role="alert" id="A_roomid" style="display:none">
            房號錯誤！
        </div>
        <label for="_email">您的E-mail (非必填)</label>
        <input type="email" class="form-control" name="post_email" id="_email" placeholder="EX: stu.nctu@gmail.com"><br>
        <label for="_fb">您的FB塗鴉牆 (非必填) 請放個人塗鴉牆的網址</label>
        <input type="text" class="form-control" name="post_fb" id="_fb" placeholder="EX: www.facebook.com/NctuStUnion">
    </div>
    <h5><b>想說的話 (非必填)</b></h5>
    <h6><b>(從哪裡來、之前讀哪、興趣、喜歡什麼運動...)</b></h6>
    <textarea class="form-control" rows="5" name="post_words"></textarea><br>
    <div class="row">
        <div class="col-md-12" style="text-align:center">
            <h4>按下送出資料代表同意將上述資料在此網站中以公開方式呈現</h4>
            <input class="btn btn-primary" type="button" value="送出資料" onClick="check()">
        </div>
    </div>
</form>

<script type="text/javascript">
    function check(){
        var flag=1;
        if(document.getElementById("_ID").value.length==7) {
            document.getElementById("A_ID").style.display="none";
        }
        else{
            document.getElementById("A_ID").style.display="";
            flag=0;
        }
        if(document.getElementById("_name").value!=""){
            document.getElementById("A_name").style.display="none";
        }
        else{
            document.getElementById("A_name").style.display="";
            flag=0;
        }
        if(document.getElementById("_class").value != "請選擇自己的科系"){
            document.getElementById("A_class").style.display="none"; 
        }
        else{
            document.getElementById("A_class").style.display="";
            flag=0;
        }
        if(document.getElementById("_dorm").value != "請選擇自己的宿舍"){
            document.getElementById("A_dorm").style.display="none"; 
        }
        else{
            document.getElementById("A_dorm").style.display="";
            flag=0;
        }
        if(document.getElementById("_dorm").value == "竹軒"){
            if(document.getElementById("_roomid").value.length == 4){
                document.getElementById("A_roomid").style.display="none"; 
            }
            else{
                document.getElementById("A_roomid").style.display="";
                flag=0;
            }
        }
        else{
            if(document.getElementById("_roomid").value.length == 3){
                document.getElementById("A_roomid").style.display="none"; 
            }
            else{
                document.getElementById("A_roomid").style.display="";
                flag=0;
            }
        }
        // Decide send or not
        if(flag){
            dorm.submit();
        }
    }
</script>
<script src=./asset/no_enter.js></script>
<?php
include_once("./footer.php");
?>
