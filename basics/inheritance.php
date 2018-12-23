<?php
class User
{
    public $name = 'Anjola';
    public $age = 'old enough';
    protected $email = 'adebayoanjola@gmail.com';
    public function getDetails() 
    {
        echo 'The username is '. $name. ', His age is '. $age. ', and his email address is '. $email;
    }
}

class Userdetails extends User 
{
 
}
// $userdetails = new Userdetails;
$user = new User;
echo $user->age;
// echo $userdetails->name;
?>