<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫管理者帳號
$db_user = "h54001347";
//資料庫管理者密碼
$db_passwd = "ricepig1919";
//資料庫名稱
$db_name = "h54001347";
//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
		
//$host="localhost";//please don't modify
//$user="F74009038";//your student id.
//$pw="k25367615";//your pw.
//$db=F74009038;

//$link=mysql_connect($host,$user,$pw);
//mysql_select_db($db,$link);

?>