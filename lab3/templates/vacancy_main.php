<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<div class="title"><h2>Вакансии</h2><br></div>
	<div class="vacancies">
        <div class="currentVacancy">
            <form>
                <div class="grid-row">
                    <?php
                    $find="SELECT * FROM vacancy";
                    $res=mysqli_query($connect, $find);
                    if(!$res)die(mysqli_error($connect));
                    if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                        $id = (int)$_GET['id'];
                        $delete = "DELETE FROM vacancy WHERE id=$id";
                        $res = mysqli_query($connect, $delete);

                        if (!$res) die (mysqli_error($connect));

                    }
                    $delete = "SELECT * FROM vacancy";
                    $res = mysqli_query($connect, $delete);
                    if (!$res) die (mysqli_error($connect));
                    while($vacancy=mysqli_fetch_assoc($res)){
                        ?>
                        <h2><?= $vacancy['title']; ?> <a href="?del=ok&id=<?= $vacancy['id']; ?>"><img src="images/remove.svg"></a></h2>
                        <p><?=$vacancy['body']?></p>

                        <?php
                    }
                    ?>
                </div>
            </form>
        </div>

	</div>
</body>
</html>