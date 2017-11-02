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
    <td align="center"><a href="admin.php"><span>Главная</span></a></td>
	<td align="center"><a href="list.php"><span>Страница загрузки</span></a></td>
	<td align="center"><span>Страница теста</span></td>
  </tr>
 </table>
<?php
if (!empty($_GET)){
	if (empty($_GET['username'])){
		echo '<br>'.'Имя не введено.';
		exit;
	}
	else if (empty($_GET['test'])){
		echo '<br>'.'Файл с тестом не выбран.';
		exit;
	}
	else{
		$json = file_get_contents(__DIR__.'/testbook/'.$_GET['test'].'.json');
		$data = json_decode($json, true);
		echo '<br>';
		if(!empty($data[0]['Question'])){
				echo '<p>Выполните тест:</p>'; 
				foreach($data as $element){
				echo '<form method="post" action="test.php">';
				echo '<p><b>'.$element['Question'].'</b></p>';
				foreach($element['Answers'] as $answer){
					for ($i = 1; $i <= count($answer) - 1; $i++) {
						echo '<p><input type="radio" name="'.$element['id'].'" value="'.$i.'">'.$answer[$i].'<br>';
					}
				}
			}
			echo '<input type="hidden" name="test_file" value="'.$_GET['test'].'">';
			echo '<p><input type="submit" value="Отправить ответы"></p>';
			echo '</form>';
		}
		else{
			echo '<p>Структура файла не соответствует утвержденной структуре json-файлов для тестов.</p>';
		}
	}
}

else if(!empty($_POST)){
	$test_file = file_get_contents(__DIR__.'/testbook/'.$_POST['test_file'].'.json');
	$data_test_file = json_decode($test_file, true);
	$n = 0;
	
	foreach($data_test_file as $element){
		if($element['Answers'][0]["correct"] == $_POST[$element["id"]]){
			$n += 1;
		}
	}	
	
	echo '<br>'.'У вас правильных ответов: '.$n.'<br>';
}
else if(empty($_GET)){
	echo '<br>'.'Выберите тест и введите имя пользователя!'.'<br>';
}
 ?>
</body>
</html>