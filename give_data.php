<?php
    include_once("./header.php");
?>

<form action="send_post.php" method="post">
    <h3>你的學號</h3>
    <input type="text" name="post_ID"> 
    <h3>你的大名</h3>
    <input type="text" name="post_name">
    <h3>你的E-mail</h3>
    <input type="text" name="post_email">
    <h3>你的FB</h3>
    <input type="text" name="post_fb">
    <h3>想說的話</h3>
    <textarea rows="20" cols="50" name="post_words"></textarea>
    <input type="submit">
</form>

<?php
    include_once("./footer.php");
?>
