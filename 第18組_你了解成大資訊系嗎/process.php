<?php
include("conn.php");
$sql="SELECT * FROM member ORDER BY id DESC";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
$count=0;
for($i=0;$i<$num;$i++){
  $row=mysql_fetch_array($result);
  if($row['id']!="re")
    $count++;
}
//echo $count;
$id=$_POST['name'];
$name=$_POST['name'];
$title=$_POST['title'];
$content=$_POST['content'];
$sql="INSERT INTO member(id,name,title,ycomment,num) VALUES ('$id','$name','$title','$content',$count)";

//$time=date("Y-m-d g:i:s");
$finish="留言完成";
echo $finish;
mysql_query($sql); 
?>
<script>
location.href="main2.php";
</script>