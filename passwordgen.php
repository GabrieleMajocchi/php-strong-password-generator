<?php
session_start();

$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>


</head>
<body>
        <h2>Password generata:</h2>
        <p><?php echo $password;?></p>
</body>
</html>