
<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Vacancy</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
	<div class="vacancy_choser">
        <h1>Выбор вакансии</h1>
        <a href="create_vacancy.php">Вакансия для обчного человека</a><br>
        <a href="create_unique_vacancy.php">Вакансия для инвалидов</a>
    </div>
</body>
</html>