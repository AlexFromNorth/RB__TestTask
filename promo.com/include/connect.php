<?php

    $connect = mysqli_connect('localhost', 'root', '', 'promo_db');

    if (!$connect) {
        die('Error connect to DataBase');
    }