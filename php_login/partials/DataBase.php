<!-- Para conectar la base de datos -->
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login_database';

try
{
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    }
    catch (PDOExeption $e){
        die('Connected Failed: '.$e->get_message()); 
    }
?>