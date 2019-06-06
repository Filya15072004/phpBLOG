<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php 
$bd = 
[
	['title' => 'Погода на сегодня',
'st' => 'Краткое описание',
'lt' => 'Подробное описание'],

	['title1' => 'Новости политики',
'st' => 'Краткое описание',
'lt' => 'Подробное описание'],

	['title2' => 'Кинофильмы',
'st' => 'Краткое описание',
'lt' => 'Подробное описание']
];

 ?>
 <?php 
echo $_GET['page'];
echo $bd [$_GET['page']]['lt']
  ?>
</body>
</html>