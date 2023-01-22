<?php

    $connect = mysqli_connect('db4free.net', 'niceclientsoft', 'niceclientsoft', 'niceclientsoft');

    if (!$connect) {
        die('Error connect to DataBase');
    }
