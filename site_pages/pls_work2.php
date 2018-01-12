<?php
/**
 * Created by PhpStorm.
 * User: rich
 * Date: 12/15/17
 * Time: 09:11
 */

$name = htmlspecialchars($_POST["user_name"]);
$email = htmlspecialchars($_POST["user_email"]);
$password = htmlspecialchars($_POST["user_password"]);

echo "Signup variables received";
echo " name: " . $name;
echo " email: " . $email;
echo " password: " . $password;

