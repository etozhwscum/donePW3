<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<div class="vacancies">
        <div class="uniqueCurrentVacancy">
            <form >
                <div class="unique-grid-row">
                    <?php
                    $find="SELECT * FROM unique_vacancy";
                    $res=mysqli_query($connect, $find);
                    if(!$res)die(mysqli_error($connect));
                    if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                        $id = (int)$_GET['id'];
                        $delete = "DELETE FROM unique_vacancy WHERE id=$id";
                        $res = mysqli_query($connect, $delete);

                        if (!$res) die (mysqli_error($connect));

                    }
                    $delete = "SELECT * FROM unique_vacancy";
                    $res = mysqli_query($connect, $delete);
                    if (!$res) die (mysqli_error($connect));
                    while($vacancy=mysqli_fetch_assoc($res)){
                        ?>
                        <p>
                        <h2><?= $vacancy['title']; ?> <a href="?del=ok&id=<?= $vacancy['id']; ?>"><img src="images/remove.svg"></a></h2>
                        <?=$vacancy['body']?>
                        </p>
                        <?php
                    }
                    ?>
                </div>

            </form>
        </div>

	</div>
</body>
</html>