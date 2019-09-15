<form action="" method="get">

Enter Your Tweet:<input type="text" name="msg" placeholder="message" autocomplete="off" required><br>

<input type="submit" value="ok">
</form>
<?php
error_reporting(0);
//$m = $_GET['msg'];
//echo "<a href='https://twitter.com/intent/tweet?text=".$m."' target='_blank'>post</a>";

if (!empty($m = $_GET["msg"])) {
    echo "<a href='https://twitter.com/intent/tweet?text=".$m."' target='_blank'>Tweet</a>";    
}// else {   echo "N0 msg";}
?>

