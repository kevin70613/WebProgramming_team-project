<style>
  table, td, th
  {
    border:1px solid black;
  }
  td
  {
    color:black;
	background-image: url(addbookimg.gif);
  }
</style>
<p><a href="main2.php">回前一頁</a></p>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="process.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<body background="addbookbg.gif" bgproperties="fixed" leftmargin="200" topmargin="50" >
  <table width="500" border="1" cellspacing="0" cellpadding="0">
    <tr align="center">
      <td colspan="2">我要留言</td>
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
    </tr>
    <tr>
      <td colspan="2">
          <input type="reset" name="Reset" value="重新填寫" >
          <input type="submit" name="Submit"value="送出">
          </td>
    </tr>
  </table>
</form>