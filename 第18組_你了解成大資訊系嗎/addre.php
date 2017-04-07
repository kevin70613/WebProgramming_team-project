<style>
  table, td, th
  {
    border:1px solid black;
  }
  td
  {
    color:blue;
	background-image: url(addreimg.gif);
  }
</style>
<p><a href="main2.php">回前一頁</a></p>

<?php
    include("conn.php");
	$name=$_POST['button'];
    $sql="SELECT * FROM member ORDER BY id DESC";
    $result=mysql_query($sql);
	    $num=mysql_num_rows($result);
        //echo $name; 
        for($i=0;$i<$num;$i++){
           if($name=="我要回覆文章".$i)
            $id=$i;
        }   
        //echo $id;
?>
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="addfinish.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<body background="addrebg.gif" bgproperties="fixed" leftmargin="200" topmargin="50" >
<center><table width="500" cellspacing="0" cellpadding="0">
    <tr align="center">
      <td colspan="2">我要回覆</td>
    </tr>
    <tr>
      <td width="30%" align="center">
          姓名:
          </td>
      <td>
      <input type="text" name="name">
          </td>
    </tr>
    <tr>
      <td width="30%" align="center">
          標題:
          </td>
      <td>
      <input type="text" name="title">
          </td>
    </tr>
    <tr>
      <td width="30%" align="center">
          內容:
          </td>
      <td>
      <textarea name="content" cols="45" rows="5">
          </textarea>
          </td>
	<input type="hidden" name="num" value="<?php
						                         echo $id?>">	
    <tr>
      <td colspan="2">
          <input type="reset" name="Reset" value="重新填寫" >
          <input type="submit" name="Submit"value="送出">
          </td>
    </tr>
  </table>
 </center> 
</form>