<?php
class Post{
    private $name;
    public function __set($name, $value){
        echo 'Setting '. $name . ' to ' . $value . '<br>';
        $this->$name = $value;

    }
    public function __get($name){
        echo 'getting ' . $name . ' from '. $this->name . '<br>';
    }


}
$post = new Post;
$post-> name = 'testing';
echo $post->name;

?>