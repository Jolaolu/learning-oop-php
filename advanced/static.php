<?php
class User {
    public $username ;
    public static $minPasswordLength = 5;
    public static function validatePassword($password) 
    {
        if (strlen($password) >= self::$minPasswordLength) {
             return true;
        } else {
             return false;
        };
    }

}
$password = "pass";
if (User::validatePassword($password)) {
    echo 'password is valid!';
} else {
    echo 'input a valid password';
}
?>