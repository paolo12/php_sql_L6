<html>
<head>
<meta charset="utf-8">
<title>List page</title>
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
    <td align="center"><a href="admin.php"><span>Главная</span></a></td>
	<td align="center"><span>Страница загрузки</span></td>
	<td align="center"><a href="test.php"><span>Страница теста</span></a></td>
  </tr>
 </table>
<p>Выберите тест:</p>
 <form enctype="multipart/form-data" action="test.php" method="GET">
 <?php foreach(glob(__DIR__.'/testbook/'.'*.json') as $filename){
	 echo '<p><input type="radio" name="test" value="'.substr(basename($filename), 0, -5).'">'.basename($filename).'<br>'.'</p>';
	 }
	 ?>
  <p><input placeholder="Ваше имя" name="username"></p>
  <p><input type="submit" value="Пройти тест"></p>
 </form>
</table>
</body>
</html>