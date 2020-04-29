<?php

class BcryptPassword {
    
    // Property

    public $password;
    public $salt;
  
    // Method

    function GetHash($password, $salt) {
        
        // Specify BCRYPT hashing options passing salt as parameter and setting the cost to 12 (reccomended)
        $cost = 12;
        $options = array('salt' => $salt, 'cost' => $cost,);

        // Hash password with parameters specified above
        
        $pwd = password_hash($password, PASSWORD_BCRYPT, $options);

        $this->password = $pwd;
        return $this->password;
    }

    function GetSalt($lenght) {
       
      // Divide length parameter by 2 to get desired length
        
      $divisor = 2;   
      $character_limit = ($lenght / $divisor);
      
      // Use cryptographically secure random function to obtain the salt.  
        
      $random_salt = random_bytes($character_limit);
        
      // Get the hexadecimal representation of the randomly generated string allows to store the result in a database out of the box.
      
      $this->salt = bin2hex($random_salt);
      return $this->salt;
  }

  }
  
?>
