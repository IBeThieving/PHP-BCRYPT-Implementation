<?php

// Include the class.

include_once './objects/SecurePassword.class.php';

// Initialize an instance of the class.

$password_secure = new SecurePassword();

// Specifiy the lenght of the salt note that bcrypt expects atleast 22 characters.

$salt_lenght = 22;

// Get password salt.

$salt = $password_secure->GetSalt($salt_lenght);

// Get password hash passing the salt as parameter.

$password = $password_secure->GetHash('password123', $salt);

// Example output.

echo "password: " . $password . PHP_EOL;
echo "salt: " . $salt . PHP_EOL;

?>
