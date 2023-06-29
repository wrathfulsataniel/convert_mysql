<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gmomysql";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM info WHERE id=$id";
    $connection->query($sql);
}

header("location: /activities/ten7/index.php");
        exit;
?>