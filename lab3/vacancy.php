
<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vcacncies</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
<?php require_once('templates/header.php');?>
	<div class="title"><h1>Вакансии</h1></div>
	<div class="vacancies">
		<form class="currentVacancy">
            <div class="grid-row">
                <?php
                $find="SELECT * FROM vacancy";
                $res=mysqli_query($connect, $find);
                if(!$res)die(mysqli_error($connect));
                while($vacancy=mysqli_fetch_assoc($res)){
                    ?>
                    <p>
                    <h2><?=$vacancy['title'];?></h2>
                    <?=$vacancy['body']?>
                    </p>
                    <?php
                }
                ?>
            </div>
        </form>
        <br>
		<form class="uniqueCurrentVacancy">
            <div class="unique-grid-row">
                <?php
                $find="SELECT * FROM unique_vacancy";
                $res=mysqli_query($connect, $find);
                if(!$res)die(mysqli_error($connect));
                while($vacancy=mysqli_fetch_assoc($res)){
                    ?>
                    <p>
                    <h2><?=$vacancy['title'];?></h2>
                    <?=$vacancy['body']?>
                    </p>
                    <?php
                }
                ?>
            </div>
        </form>

	</div>
    <br>
    <div class="nextLink">
        <a href="choose_vacancy.php">Create Vacancy</a>
    </div>
</body>
</html>