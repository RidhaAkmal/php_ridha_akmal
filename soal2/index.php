<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: C:\xampp\htdocs\soal2)
    $project_location = "/soal2";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "views/home.php";
            break;
        case $me.'/person' :
            require "views/person.php";
            break;
        case $me.'/hobi' :
            require "views/hobi.php";
            break;
        case $me.'/report/hobi' :
            require "views/report-hobi.php";
            break;
        case $me.'/search/hobi' :
            require "views/search-person-by-hobi.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }