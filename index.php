<?php
try {
    $conn = new mysqli("5.39.75.103", "pcto-firstcampus", "WIvSENfrva7MKJh4qhdI", "pcto-firstcampus");
} catch(Exception $e) {
    die($e);
}

echo "ok";