<?php

session_start();

require 'DataBase.php';

if (!empty($_POST['email']) && !empty($_POST['password']))
{
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['users_id'] =$results['id'];
        header('Location: /php_login');
    } else{
        $message = 'Sorry, those credentials do not match';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/php_login/assets/css/style.css">
</head>
<body>

    <?php
require 'file:///C:/xampp/htdocs/php_login/partials2/header.php'
?>
    <h1>Login</h1>
    <span>or <a href="Signup.php">Signup</a></span>

    <?php
    if(!empty($message)):
    ?>
    <p><?= $message ?></p>
    <?php endif; ?>

    <!-- Formulario de iniciar sesion -->
    <form action="Login.php" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter">
        <input type="submit" value="send">
    </form>
</body>
</html>