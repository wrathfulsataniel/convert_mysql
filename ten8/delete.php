<?php
require_once 'MysqliDb.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gmomysql";

    // Create database connection
    $db = new MysqliDb($servername, $username, $password, $database);

    // Delete record
    $db->where('id', $id);
    $db->delete('info');
}

header("location: /ten8/index.php");
exit;
?>