<?php
session_start();
if(isset($_SESSION['user'])) {
    header("Location: /"); die();
}

$params = ["username", "password"];
foreach($params as $param) {
    if(!isset($_POST[$param])) {
        header("Location: /login/?e"); die();
    }
}


try {
    $conn = new mysqli("5.39.75.103", "pcto-firstcampus", "WIvSENfrva7MKJh4qhdI", "pcto-firstcampus");
} catch(Exception $e) {
    http_response_code(500);
    die($e);
}

$sql = "SELECT hash, ruolo FROM utenti WHERE username = '%s'";
$sql = sprintf($sql, $_POST["username"]);
$res = $conn->query($sql);

if($res->num_rows == 0) {
    header("Location: /login/?e"); die();
}
$hash = $res->fetch_row()[0];
$ruolo = $res->fetch_row()[1];

if(!password_verify($_POST["password"], $hash)) {
    header("Location: /login/?e"); die();
}

// UTENTE VALIDO
session_destroy();
session_regenerate_id();

$_SESSION['user'] = $_POST["username"];
$_SESSION['user_role'] = $ruolo;

header("Location: /");

$sql = "UPDATE utenti SET ultimo_accesso = NOW() WHERE username = '%s'";
$conn->query(sprintf($sql, $_POST["username"]));