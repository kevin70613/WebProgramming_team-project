<html>
<head>

<title>成大資工測驗題</title>

<style type="text/css">
<!--
 A:link{color:#AFD6FF}
 A:visited{color:#AFD6FF}
 A:active:{color:#AFD6FF}
 A:hover{color:#800080; font-weight:bold;}
 A.s:link{color:#91FF92}
 A.s:visited{color:#91C7FF}
 A.s:active:{color:#91FF92}
 A.s:hover{color:#FF7573; font-weight:bold;}
 
 -->
 </style>
</head>
<body background="eee.jpg" style="background-repeat: no-repeat;background-position: center center;">
<p></p>
<?PHP
 
if (!empty($_POST["rdoQ"])){
				$rdoQ = $_POST["rdoQ"];
				//判斷是否取得表單資料,若有則比對答案
				$rightans = 0;
				//-----比對資料庫的正確答案------
				$link_ID = mysql_connect("localhost","h54001347","ricepig1919");
				//連接mysql伺服器
				mysql_select_db("h54001347",$link_ID); //
				mysql_query("SET NAMES 'UTF8'");
				mysql_query("SET CHARACTER SET UTF8");
				mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
				mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");

				$txt=$_POST["txt"];
				for ($i=1; $i<=5; $i++){
				
				
						//設定迴圈,執行一次即取出那一題的答案
						$str = "SELECT qus, ans ,anschar FROM exam
								WHERE qid='".$txt[$i]."';";
						
						$result = mysql_query($str);

						$arr[$i] = mysql_fetch_array($result);
						//查詢結果的記錄筆數
						
							if ($arr[$i]['ans'] == $rdoQ[$i]-1){
						 
							  $rightans = $rightans + 1; ?>
						 
							  <p style="background-color:#CCFFCC"><b bgcolor="green">第<?PHP
										echo $i?>題您答
							  <font size="4" color="blue" bgcolor="green">對</font>了</b>
							  <br><?PHP
										echo $arr[$i]['qus']?><br>答案是[
								  <b><?PHP
										echo $arr[$i]['ans'];
										;?>]
									  <?PHP
										echo $arr[$i]['anschar'];?>
								   </b>
							  </p>

							<?PHP
							 }else {?> <!--//若答案不相符,則執行下面的程式碼-->
								  <p style="background-color:#FFCCCC">第<?PHP
											echo $i?>題您答
								  <font size="4" color="blue" >錯</font>了
								  <font color="green"><b>
								  <br><?PHP
											echo $arr[$i]['qus']?></b></font>
								  <br>答案是[<font color="brown">
								  <b><?PHP
										echo $arr[$i]['ans'];
										;?>]
									  <?PHP
										echo $arr[$i]['anschar'];?>
								   </b></font></p>
								<?PHP
								}
						}//end for
								mysql_close($link_ID); //關閉與資料庫的連接	?>					
								<h3>全部您共答對了
								<font color="green"><?PHP
								echo $rightans?></font>題<br>
								<h3>共
								<font color="red" =5><?PHP
								echo 100*($rightans/5)?></font>分
								<?PHP
								if($rightans==5){?>
								<a class='s' href="surprise.php">領取獎勵</a><?PHP
								}?>
								<br><a href="exam2.php" target="_self">要不要再來一次?</a><br>
								<a href="main2.php">前往留言板</a>
									<?PHP							
}else {?>
							<center>
							<font size="4" color="red">對不起,您尚未作答</font>
							<a href="exam2.php" target="_self">請完成作答</a><br>
							<a href="main2.php">前往留言板</a>
							</center>
							<?PHP
	 }?>

</body>
</html>