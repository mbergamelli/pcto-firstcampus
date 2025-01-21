<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sql-server-rossotech.database.windows.net,1433; Database = rossotech-azure", "mattia", "Newton10337@");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "mattia", "pwd" => "Newton10337@", "Database" => "rossotech-azure", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sql-server-rossotech.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>