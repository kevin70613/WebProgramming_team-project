<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//�Y�ώ��O��
//�Y�ώ�λ��
$db_server = "localhost";
//�Y�ώ�����ߎ�̖
$db_user = "h54001347";
//�Y�ώ�������ܴa
$db_passwd = "ricepig1919";
//�Y�ώ����Q
$db_name = "h54001347";
//���Y�ώ��B��
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("�o�����Y�ώ��B��");

//�Y�ώ��B����UTF8
mysql_query("SET NAMES utf8");

//�x���Y�ώ�
if(!@mysql_select_db($db_name))
        die("�o��ʹ���Y�ώ�");
		
//$host="localhost";//please don't modify
//$user="F74009038";//your student id.
//$pw="k25367615";//your pw.
//$db=F74009038;

//$link=mysql_connect($host,$user,$pw);
//mysql_select_db($db,$link);

?>