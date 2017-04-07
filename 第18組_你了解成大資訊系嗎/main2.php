<style>
  table, td, th
  {
    border:1px solid black;
  }
  td
  {
    color:blue;
	background-image: url(tableimg.gif);
  }
</style>
<?php
include("conn.php");
$sql="SELECT * FROM member ORDER BY id DESC";
$result=mysql_query($sql);
?>
<body background="background.gif" bgproperties="fixed" leftmargin="200" topmargin="50" >
<center><font color="#FF00FF" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=53>歡</marquee></font>
<font color="#AB3080" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=55>迎</marquee></font>
<font color="#5564EC" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=50>來</marquee></font>
<font color="#FF0000" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=54>到</marquee></font>
<font color="#3366CC" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=50>留</marquee></font>
<font color="#03FF00" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=54>言</marquee></font>
<font color="#13E1C1" size="10" face="標楷體"><marquee direction=up behavior=alternate width=80 height=50>板</marquee></font></center></p>
<p><a href="addbook.php">我要留言</a>&nbsp&nbsp&nbsp&nbsp&nbsp <a href="exam2.php">回到答題系統</a></p>
<center><table width="800" cellspacing="0" cellpadding="0">
  <tr>
    <td>標題</td>
    <td>留言者</td>
	<td>文章編號</td>
    <td> </td>
	<td> </td>
  </tr>
 
  <?php
  $count=0;
  if(mysql_num_rows($result)>0)
  {
        $num=mysql_num_rows($result);

        for($i=0;$i<$num;$i++){
                $row=mysql_fetch_array($result);
				if($row['id']!="re" ){
				        $count++;
                        echo "<tr>";
                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['name']."</td>";
						echo "<td>".$row['num']."</td>";
	                    ?>
						<td><form name="form" method="post" action="content.php">
						<input type="hidden" name="<?php 
						                                 echo $i?>"
						                                            value="<?php
						                                                         echo $row['num']?>">
                        <input type="submit" name="button" value="詳見文章<?php 
						                                                         echo $row['num']?>" /></form></td>
						<td><form name="form" method="post" action="addre.php">
						<input type="hidden" name="<?php 
						                                 echo $i?>"
						                                            value="<?php
						                                                         echo $row['num']?>">
                        <input type="submit" name="button" value="我要回覆文章<?php 
						                                                         echo $row['num']?>" /></form></td>														 
                        <!--<td><p><a href="content.php">詳見全文</a></p></td>-->
						<!--<td><p><a href="addre.php">我要回覆</a></p></td>-->
						<?php
                        echo "</tr>";
				}		
        }
  }
  ?>
</table></center>
<center>
<br><br>
<?php
     echo "目前一共有 ".$count." 則留言";
?>
</center>