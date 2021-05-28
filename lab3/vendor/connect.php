<?php

    $connect = mysqli_connect('localhost', 'root', '', 'work_db');

    if (!$connect) {
        die('Error connect to DataBase');
    }