<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEN 8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>CRUD Functionality</h2>
        <a class="btn btn-primary" href="/ten7/create.php" role="button">New Infomation</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php

            require_once 'MysqliDb.php';
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "gmomysql";
            
            // Create a new instance of the MysqliDb class
            $db = new MysqliDb($servername, $username, $password, $database);
            
            // Check connection
            if (!$db->ping()) {
                die("Connection failed: " . $db->error());
            }
            
            // Read all rows in the database table
            $rows = $db->get('info');
            if (!$rows) {
                die("Invalid query: " . $db->error());
            }
            
            // Read data of each row
            foreach ($rows as $row) {
                echo "
                <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['created_at']}</td>
                <td>
                <a class='btn btn-primary btn-sm' href='/ten8/edit.php?id={$row['id']}'>Edit</a>
                <a class='btn btn-danger btn-sm' href='/ten8/delete.php?id={$row['id']}'>Delete</a>
                </td>
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>