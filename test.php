<?php
$from_form = $_POST;
$n = 0;
?>
<html>
<head>
<meta charset="utf-8">
<title>Test page</title>
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
    <td align="center"><a href="admin.php"><span>Файл admin.php</span></a></td>
	<td align="center"><a href="list.php"><span>Файл list.php</span></a></td>
	<td align="center"><span>Файл test.php</span></td>
  </tr>
 </table>
<p>Ваш результат:</p>
<?php
foreach($from_form as $answer){
	if ($answer == "a2"){
		$n += 1;
	}
}
echo 'У вас правильных ответов: '.$n.'<br>';
?>
</table>
</body>
</html>