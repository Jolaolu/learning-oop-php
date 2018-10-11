<?php
//    include_once ('bar.php');
//    include_once ('foo.php');


/*
 * includes the foo and the bar file
 *
 */
    spl_autoload_register(function ($class_name){
        include $class_name . '.php';
    });

    //takes away the need to have several include statements in your code by using one function for all

$Foo = new foo();
$Foo->sayHello();

 ?>