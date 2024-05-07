<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<body>
    <?php
        if (isset($_SESSION["username"])) {
            echo "welcome admin";
            ?>
            <button onclick="location.href='logout.php'">log out</button>
            <?php
        }
        else{
            header("location: login.php");
        }

?>
</body>
</html>