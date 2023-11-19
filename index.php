<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MySQL Docker Test</title>
</head>
<body>
    <h1>PHP and MySQL Docker Test</h1>

    <?php

        if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
            echo 'We don\'t have mysqli!!!';
        } else {
            echo 'Phew we have it!';
        }

        $host = 'mysql';
        $user = 'exampleuser';
        $password = 'examplepass';
        $database = 'exampledb';

        $conn = new mysqli($host, $user, $password, $database);

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        echo '<p>Connected to MySQL successfully!</p>';

        $conn->close();
    ?>
</body>
</html>
