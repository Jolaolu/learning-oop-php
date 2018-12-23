<?php
class User
{
    public $name = 'Anjola';
    public $age = 'old enough';
    protected $email = 'adebayoanjola@gmail.com';

}

class Userdetails extends User 
{
    public function getDetails() 
    {
        echo 'The username is '. $this->name . ', His age is '. $this->age. ', and his email address is '. $this->email;
    }
}
$userdetails = new Userdetails;
// $user = new User;
// echo $user->age;
echo $userdetails->getDetails();
// echo $userdetails->name;
?>