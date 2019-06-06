<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<?php 
	$bd = 
[
	['title' => 'Погода на завтра',
'st' => 'Краткое описание',
'lt' => 'Подробное описание'],

	['title' => 'Новости политики',
'st' => 'Краткое описание',
'lt' => 'Подробное описание'],

	['title' => 'Кинофильмы',
'st' => 'Краткое описание',
'lt' => 'Подробное описание']
];

for ($i=0; $i < count($bd); $i++) { 

echo'<div class=h1><h1>' . $bd[$i]['title'] . '</div></h1>';
echo'<div class=p><p>' . $bd[$i]['st'] . '</div></p>';
echo'<a href="page.php?page=' . $i . '">Далее</a>';
}

 ?>
 </div>

</body>
</html>