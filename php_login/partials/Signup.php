<?php
require 'file:///C:/xampp/htdocs/php_login/partials/DataBase.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']))
{
$sql = "INSERT INTO users (email, password) VALUE (:email, :password)";
$stmt = $conn-> prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password);

if ($stmt->execute()) {
    $message ='successfull created new user';
    } else{
    $message = 'sorry there must have been an issue creating your account';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/php_login/assets/css/style.css">
</head>
<body>
    <?php
require 'file:///C:/xampp/htdocs/php_login/partials2/header.php'
?>

<?php
if(!empty($message)): ?>
<p> <?= $message ?></p>
<?php endif; ?>

<h1>Signup</h1>
<span>or <a href="Login.php">Login</a></span>

<!-- Formulario de registro -->
<form action="Signup.php" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <input type="submit" value="send">
</form>

</body>
</html>