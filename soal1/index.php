<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: C:\xampp\htdocs\soal1)
    $project_location = "/soal1";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "views/soal1a.php";
            break;
        case $me.'/soal1b' :
            require "views/soal1b.php";
            break;
        case $me.'/soal1c' :
            require "views/soal1c.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }