<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conn.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$mail = $_POST['mail'];

$query="SELECT * FROM users";
$link=mysql_connect($db_server, $db_user, $db_passwd);
$result=mysql_query($query,$link);
$check='OK';
//echo "$check";
while($rows=mysql_fetch_array($result))
{

 if($id == $rows[0] && $pw == $rows[1]){
    $check='NO';
 }	
}
//echo "$check";
if($id != null && $pw != null && $check == 'OK')
{
        //新增資料進資料庫語法
        $sql = "insert into users (name,pw,mail) values ('$id', '$pw', '$mail')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
				//$newsql = "CREATE TABLE ".$id." (url varchar(50) NOT NULL, title varchar(30) NOT NULL, comment varchar(50) NOT NULL)"; 
		        //if(mysql_query($newsql))
				  //echo '新增資料表成功...\n';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
}
else
{
        echo '此帳號已經有人註冊!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>

