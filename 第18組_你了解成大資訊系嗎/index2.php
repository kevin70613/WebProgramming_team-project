
<?PHP

	require_once('bookmark.php');//�t�J�ۭq��h�w

	html_header('login');?>
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Big5" />
</head>

<body background="aaa.gif" background="aaa.jpg">
<center>
<table >
<form action="exam2.php" method="post">
<tr>
<td colspan=3><center><font size=2 >�w����{���j��uAAQ</font></center></td>
</tr>

<tr><td></td></tr>
<tr>
<td colspan=3><center><font size=2 >AAQ���A��F�Ѧ��j��u!</font></center></td>
</tr>
<tr>
<td >�A���j�W:</td><td><input name="usrname" type="text" size=20 value="Mr. Wang"></td>
<td><input type="submit" value="�}�l�@��" ></td>
</tr>
<tr><td></td></tr>

</form>
</table>
<br>
<center><font color="#FFFFFF" size="5" face="�з���"><a href="logout.php">Logout</a></font><br></center>


<?PHP

//�[�J����?>
<p id="demo"></p>
<canvas id="darea1" width="600" height="600" ></canvas>
<script>
var canvas= document.getElementById("darea1");
var cx= canvas.getContext("2d");


var centerX=  300;
var centerY=  45;

setInterval(function(){clock();}, 500);//�C500�ӳ�쭫�Ƥ@��function()

function clock(){
  canvas.width= canvas.width;  //�M��canvas
  cx.beginPath();
  cx.arc(centerX, centerY, 45, 0, 2*Math.PI, true);//�e��
  cx.stroke();//�e�X�u
  cx.translate(centerX,centerY);

 
 

  var dt = new Date();
  var seconds= dt.getSeconds();
  var minutes = dt.getMinutes();
  var hours = dt.getHours();
  //��
  var angle= 360/60* seconds*Math.PI/180;//�C�@��6�� ���׳�줣�O�� �ҥH�ഫMath.PI/180
  cx.save();
  cx.save();<!--�nsave�⦸-->
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -35);
  cx.stroke();//�e�X�u
  
  cx.restore();

  //��
  angle = (360/60*minutes+360/60/60*seconds)*Math.PI/180;
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -25);
  cx.stroke();//�e�X�u
  
  cx.restore();

  //��
  angle = ((360/12*hours+360/12/60*minutes)%360)*Math.PI/180;
  cx.rotate(angle);
  cx.moveTo(0, 0);
  cx.lineTo(0, -15);
  cx.stroke();//�e�X�u

  myTimer();

 }
function myTimer()
{
var d = new Date();
var t = d.toLocaleTimeString();
document.getElementById("demo").innerHTML=t;
}

</script>
<p><a href="addbook.php">�ڭn�d��</a></p>
</center>
<?PHP

 html_footer();?>

