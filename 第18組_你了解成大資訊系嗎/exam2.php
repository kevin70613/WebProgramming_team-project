<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>來了解成大資工吧!!!</title>
<script type="text/javascript" src="create.js"></script>
<style type="text/css">
<!--
 A:link{color:#73B7FF}
 A:visited{color:#73B7FF}
 A:active:{color:#73B7FF}
 A:hover{color:#800080; font-weight:bold;}
 
 -->
 </style>
</head>
<body background="eee.jpg">

<font size="6" color="red"><b>來了解成大資工吧!!!</b></font><br><br>

<font size="4" color="white">回答完以下問題後，看看你多了解成大資工<br>(全部答對將會有獎勵喔)</font>
<br>
<p></p>
<font size="3" color="yellow" style="background-color:blue;"><?PHP
$name = $_POST['usrname'];
if(!$name)
$name = "Mr.Wang";
echo "Hello";?></font><font color="white">&nbsp<?PHP
echo $name;?> </font>
<br><br><br><br><br>
<form action="exam2.php" method="post">
<input name="usrname" type="hidden" value="<?PHP
echo $name ?>" >
<input type="submit" value="題目不喜歡->換題目" style="background-color:yellow;color:blue;" >
</form>

<?PHP

	
	
	$link_ID = mysql_connect("localhost","h54001347","ricepig1919");

	mysql_select_db("h54001347"); 
	
	mysql_query("SET NAMES 'UTF8'");
	mysql_query("SET CHARACTER SET UTF8");
	mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
	mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
	

	for ($i=1; $i<=30; $i++){
  	$a[$i]=$i;//建立題目題號陣列
  };
	
for ($i=1;$i<=5;){
	
  $chcNum = rand(1, 30);//從26題中隨機選擇
  
  if ($a[$chcNum]!=0){//判斷是否已經走過
  
  $str = "SELECT * FROM exam WHERE qid=".$a[$chcNum].";";        
          
  
  $result = mysql_query($str,$link_ID);

  
  $arr[$i] = mysql_fetch_array($result, MYSQL_BOTH);
 
  $i++;
  $a[$chcNum]=0;//走過
 
  };
};
mysql_close($link_ID); 
?>

<form action="check.php" method="post" name="form1">
<?PHP

	for ($i=1; $i<=5; $i++){
					  ?>
					  <p>
					  <font size="4" ><?PHP
														echo $i//題號?>
					  <?PHP
															echo $arr[$i]['qus']//題目qus指在資料庫中題目欄位?></font> </p><br>
					  <?PHP
					  //每個選項的前面都隱藏一個input hidden 其value存有此題真正在資料庫中編號
					  //fetch_array後資料放在$arr[$i]中 $arr[$i][0]編號 $arr[$i][0]放題目 選項從$arr[$i][2~5]
					  for ($j=2; $j<=6; $j++){
					  
											  if($j==6){//單題送出?>
											  <input type="hidden" 
													 name="txt[<?PHP
																	echo $i//第i題 讀者看到?>]"value=" <?PHP
																											echo $arr[$i]['qid']//實際在資料庫題號存在value中?>">
											  <input type="button" value="看解答" 
													 onClick="sendData(<?PHP
																	echo $arr[$i]['qid']//實際在資料庫題號?>)">
											  <h2><div id="ddiv">
											  </div></h2>																										
											 
											  <?PHP											  
											  }else
											  {
												?>  
											  <font size="4" >
											  <input type="hidden" 
													 name="txt[<?PHP
																	echo $i//第i題 讀者看到?>]"value=" <?PHP
																											echo $arr[$i]['qid']//實際在資料庫題號存在value中?>">
											  <input type="radio" size="7" name="rdoQ[<?PHP
																					echo $i//第i題 讀者看到?>]"value="<?PHP
																															echo $j?>">
											  
											   <?PHP
											   echo $arr[$i][$j]?>
											   </font>
											   <?PHP
												}
										};?>
					   
					  
					   
					  <p></p>
					<?PHP

};?>
<input type="submit" value="我答完了" name="submit1" color=black style="background-color:black;color:white;" >
</form>
<p><a href="main2.php">我要留言</a></p>
<p><a href="index2.php">首頁</a></p>

</body>
</html>