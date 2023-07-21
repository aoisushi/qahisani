<?php 
    
    // Define Path Constants
    define('WWW_ROOT', 'http://localhost:8888');
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    // Define Database Constants
    define('DB_HOST', 'localhost');
    define('DB_USER', 'hisani_user');
    define('DB_PASS', '!k+Y2J');
    define('DB_DATABASE', 'hisani');

    // Include Functions
    require('functions.php');

    // Require Classes
    require(get_path('app/Classes/Reservation.php'));

    // Connect to the database
    $db = db_connect();

    Reservation::set_db($db);