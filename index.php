<?php
    class User{
        public $id;
        public $userName;
        public $email;
        public $password;

        public function __construct(){

            echo 'Constructor Called <br>';
        }

        public function register(){
            echo 'User Registered </br>';

        }
        public function login($userName,$password){
               $this->auth_user($userName,$password);
            }

        public function auth_user($userName,$password){
            echo $userName . ' is authenticated<br>';
        }
        public function __destruct(){
            // TODO: Implement __destruct() method.
        }
    }


    $User = new User();
    $User->register();
    $User->login('Timi','2345');




?>



