<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class People
{
    public $person1 = 'mike';
    public $person2 = 'shirley';
    public $person3 = 'kola';

    private $_person4 = "dele";
    protected $person5 = 'kayode';

    // public function iterateObject()
    // {
    //     foreach ($this as $key => $value) { 
    //         echo $key . ' is ' . $value. ' <br>';
    //     }
    // }
}

$people = new People;

foreach ($people as $key => $value) {
    echo($key. ' as '.$value . '<br>');
}
//only displays 3 properties of the class people, because of the access modifiers of the other 2 classes
?>