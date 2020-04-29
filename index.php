<?php

// Include the class.

include_once './objects/BcryptPassword.class.php';

// Initialize an instance of the class.

$bcrypt_password = new BcryptPassword();

// Specifiy the lenght of the salt note that bcrypt expects atleast 22 characters.

$salt_lenght = 22;

// Get password salt.

$salt = $bcrypt_password->GetSalt($salt_lenght);

// Get password hash passing the salt as parameter.

$password = $bcrypt_password->GetHash('password123', $salt);

// Example output.

echo "password: " . $password . PHP_EOL;
echo "salt: " . $salt . PHP_EOL;

?>
