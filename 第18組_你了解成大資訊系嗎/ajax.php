<?PHP

	$n = $_GET['pwd'];
	
	$link_ID = mysql_connect("localhost","h54001347","ricepig1919");
	
	mysql_select_db("h54001347",$link_ID); //
	mysql_query("SET NAMES 'UTF8'");
	mysql_query("SET CHARACTER SET UTF8");
	mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
	mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
	$str = "SELECT ans ,anschar FROM exam WHERE qid='".$n."';";
	$result = mysql_query($str);
	$arr = mysql_fetch_array($result);
	mysql_close($link_ID);
	
	$ans = $arr['anschar'];

	echo $ans;

?>