<?php
// OPERAZIONI INIZIALI
try {
    $conn = new mysqli("5.39.75.103", "pcto-firstcampus", "WIvSENfrva7MKJh4qhdI", "pcto-firstcampus");
} catch(Exception $e) {
    http_response_code(500);
    die($e);
}

session_start();

if(!isset($_SESSION['user'])) {
    header("Location: /login/");
}
if($_SESSION['user_role'] != "admin" OR $_SESSION['user_role'] != "docente") {
    header("Location: /login/");
}