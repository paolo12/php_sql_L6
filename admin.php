<html>
<head>
<meta charset="utf-8">
<title>Admin page</title>
<style>
    body {
        width: 75%;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<table border="1px" border-collapse="collapse" width="100%">
  <tr>
    <td align="center"><span>Файл admin.php</span></td>
	<td align="center"><a href="list.php"><span>Файл list.php</span></a></td>
	<td align="center"><a href="test.php"><span>Файл test.php</span></a></td>
  </tr>
 </table>
<p>Загрузите файл с тестами в формате json:</p>
<form enctype="multipart/form-data" action="/list.php" method="POST">
Файл: <input name="userfile" type="file" />
<br />
<input type="submit" value="Загрузить">
</form>
</table>
</body>
</html>