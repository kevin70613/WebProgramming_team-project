
<?php
include("conn.php");
$id="re";
$name=$_POST['name'];
$title="RE:".$_POST['title'];
$content=$_POST['content'];
$num=$_POST['num'];
//echo $num;
$sql="INSERT INTO member(id,name,title,ycomment,num) VALUES ('$id','$name','$title','$content','$num')";

echo 'alert("回覆完成")';
mysql_query($sql);
 
?>
<script>
location.href="main2.php";
</script>