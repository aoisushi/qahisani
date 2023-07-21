<?php 

// User-Defined Functions
// ----------

// Returns a URL to a path
// Adds a leading '/' if one has not been provided.
function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

// Returns the location on the server to a path
// Adds a leading '/' if one has not been provided.
function get_path($path = "") {
    if ($path != "") {
        if($path[0] != '/') {
        $path = '/' . $path;
    }
}
    return PROJECT_ROOT . $path;
}

// Redirects to a given URL via the get_url function
function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

// Return special characters as HTML entities for security
function h($str) {
    return htmlspecialchars($str);
}

// Returns a URL safe string
function u($string) {
    return urlencode($string);
}

// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}

// This function will return if a POST request has been sent
function is_post_request() {
    return $_SERVER[ 'REQUEST_METHOD'] === 'POST';
}

// Database Connection function
function db_connect() {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    if($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db-> connect_error;
        exit();
    }
    return $db;
}
