<?php

session_start();

include_once __DIR__ . "/functions.php";

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    $password = getRandomPassword($length);
    $_SESSION['password'] = $password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>


</head>
<body>
    <h1>Strong password generator:</h1>

    <form method="GET" action="./passwordgen.php">
        <label for="length">Length of password:</label>
        <input type="number" name="length" id="length" value="" placeholder="Minimum 4" required min="4">
        <input type="submit" value="Generate password">
    </form>

    <?php if (isset($password)){?>
        <h2>Password generata:</h2>
        <p><?php echo $_SESSION['password']; ?></p>
    <?php }?>
</body>
</html>

