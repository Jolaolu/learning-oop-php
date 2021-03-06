<?php


abstract class Animal{
    public $name;
    public $color;
    public function describe(){
        return 'this  dog named ' .$this->name . ' is ' . $this->color;
    }
// cant be instantiated on its own , has to be extended by another class
    abstract public function makeSound();

};

class Dog extends  Animal{
    public function describe(){
        return  parent::describe(); 
    }
    public function  makeSound(){
        return 'barks';
    } //extends and uses te value in the class Animal
};
$animal = new Dog();
$animal->name = 'bobby';
$animal->color = 'grey';
echo $animal->describe();
?>