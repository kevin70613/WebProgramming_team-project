
<?PHP

	require_once('bookmark.php');//含入自訂函士庫

	html_header('login');?>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Big5" />
</head>

<body background="aaa.gif" background="aaa.jpg">
<center>
<table >
<form action="exam2.php" method="post">
<tr>
<td colspan=3><center><font size=2 >歡迎光臨成大資工AAQ</font></center></td>
</tr>

<tr><td></td></tr>
<tr>
<td colspan=3><center><font size=2 >AAQ讓你更了解成大資工!</font></center></td>
</tr>
<tr>
<td >你的大名:</td><td><input name="usrname" type="text" size=20 value="Mr. Wang"></td>
<td><input type="submit" value="開始作答" ></td>
</tr>
<tr><td></td></tr>

</form>
</table>
<br>
<center><font color="#FFFFFF" size="5" face="標楷體"><a href="logout.php">Logout</a></font><br></center>


<?PHP

//加入時鐘?>
<p id="demo"></p>
<canvas id="darea1" width="600" height="600" ></canvas>
<script>
var canvas= document.getElementById("darea1");
var cx= canvas.getContext("2d");


var centerX=  300;
var centerY=  45;

setInterval(function(){clock();}, 500);//每500個單位重複一次function()

function clock(){
  canvas.width= canvas.width;  //清除canvas
  cx.beginPath();
  cx.arc(centerX, centerY, 45, 0, 2*Math.PI, true);//畫圓
  cx.stroke();//畫出線
  cx.translate(centerX,centerY);

 
 

  var dt = new Date();
  var seconds= dt.getSeconds();
  var minutes = dt.getMinutes();
  var hours = dt.getHours();
  //秒
  var angle= 360/60* seconds*Math.PI/180;//每一秒6度 角度單位不是度 所以轉換Math.PI/180
  cx.save();
  cx.save();<!--要save兩次-->
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -35);
  cx.stroke();//畫出線
  
  cx.restore();

  //分
  angle = (360/60*minutes+360/60/60*seconds)*Math.PI/180;
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -25);
  cx.stroke();//畫出線
  
  cx.restore();

  //時
  angle = ((360/12*hours+360/12/60*minutes)%360)*Math.PI/180;
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -15);
  cx.stroke();//畫出線

  myTimer();

 }
function myTimer()
{
var d = new Date();
var t = d.toLocaleTimeString();
document.getElementById("demo").innerHTML=t;
}

</script>
<p><a href="addbook.php">我要留言</a></p>
</center>
<?PHP

 html_footer();?>

