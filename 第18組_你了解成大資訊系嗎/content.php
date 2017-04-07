<style>
  table, td, th
  {
    border:1px solid black;
  }
  td
  {
    color:black;
	background-image: url(conttableimg.gif);
    text-align:left;
  }
</style>
<p><a href="main2.php">回前一頁</a></p>
<?php
include("conn.php");
$sql="SELECT * FROM member ORDER BY id DESC";
$result=mysql_query($sql);
$sq2="SELECT * FROM member ORDER BY id DESC";
$result2=mysql_query($sq2);
?>
<body background="contentbg.gif" bgproperties="fixed" leftmargin="200" topmargin="50" >
<center><table  width="600" height="150" cellspacing="0" cellpadding="0">
  <tr>
    <td> 留言 </td>
    <td> 關於此則留言 </td>
  </tr>
<?php

  if(mysql_num_rows($result)>0)
  { 
        $name=$_POST['button'];
        $num=mysql_num_rows($result);
        //echo $name; 
        for($i=0;$i<$num;$i++){
           if($name=="詳見文章".$i)
            $id=$i;
        }   
        //echo $id;
		//echo "=====";
        //$num=mysql_num_rows($result);
        for($i=0;$i<$num;$i++){
                $row=mysql_fetch_array($result);
				if($row['num']==$id && $row['id']!="re"){
				    	echo "<tr>";
                        echo "<td> 標題: </td>";
                        echo "<td>".$row['title']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td> 作者: </td>";
                        echo "<td>".$row['name']."</td>";
					    echo "</tr>";
						echo "<tr>";
						echo "<td> 內容: </td>";
                        echo "<td>".$row['ycomment']."</td>";
                        echo "</tr>";
                        //echo "標題:".$row['title']."<br>";
						//echo "作者:".$row['name']."<br>";
                        //echo "內容".$row['ycomment']."<br>";
				}
	    }?>
		</table>
    <?php	 
        for($j=0;$j<$num;$j++){
                $row1=mysql_fetch_array($result2);	
				if($row1['num']==$id && $row1['id']=="re"){?>
					<br><br><font color="#3366CC" size="6" face="標楷體"> 留言回覆</font><br><br>	
	                <table  width="600" height="150" cellspacing="0" cellpadding="0">
					<?php
                        echo "<tr>";
                        echo "<td> 回應 </td>";
                        echo "<td> 關於此則回應 </td>";
                        echo "</tr>";
						echo "<tr>";
                        echo "<td> 標題: </td>";
                        echo "<td>".$row['title']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td> 作者: </td>";
                        echo "<td>".$row1['name']."</td>";
					    echo "</tr>";
						echo "<tr>";
						echo "<td> 內容: </td>";
                        echo "<td>".$row1['ycomment']."</td>";
                        echo "</tr>";
				  //echo "作者:".$row['name']."<br>";
                  //echo "內容".$row['ycomment']."<br>";?>
				  </table>
				 <?php
				}
        }
    }
?>
</center>
