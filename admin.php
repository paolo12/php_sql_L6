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
    <td align="center"><span>Главная</span></td>
	<td align="center"><a href="list.php"><span>Страница загрузки</span></a></td>
	<td align="center"><a href="test.php"><span>Страница теста</span></a></td>
  </tr>
 </table>
<p>Загрузите файл с тестами в формате json:</p>
<form enctype="multipart/form-data" action="admin.php" method="POST">
Файл: <input name="userfile" type="file" />
<br />
<input type="submit" value="Загрузить">
</form>
<?php
	if(!empty($_FILES)){
		$file_name = $_FILES['userfile']['name'];
		$up_path = '';
		$tmp_file = $_FILES['userfile']['tmp_name'];
		if (move_uploaded_file($tmp_file, $up_path . $file_name)){
			echo 'Файл теста загружен!';
		}
		else{
			echo 'Произошла ошибка при загрузке файла! Попробуйте загрузить файл еще раз.';
		}
}
?>
</table>
</body>
</html>