<?PHP
//html_header()用來產生html開始一小段程式碼
?>
<?PHP

function html_header($title){?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Big5">

<title><?PHP

echo $title?></title>
<style type="text/css">
<!--
 A:link{color:#000000}
 A:visited{color:#000000}
 A:active:{color:#00ff00}
 A:hover{color:#800080; font-weight:bold;}
 A.white:link{color:#ffffff}
 A.white:visited{color:#ffffff}
 A.white:active:{color:#ffffff}
 A.white:hover{color:#ff0000; font-weight:bold;}
 
 BODY{background-repeat: no-repeat; background-position:50% 0%; }
 TD,TR,B{ font-size:16px;color:white;font-weight:bold}
 UL,LI{list-style-type:none;font-size:16px;color:white;}
-->
</style>
</head>
<?PHP

}?>

