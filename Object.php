<?php
    class People {
        public $person1 = 'Jola';
        public $person2 = 'drake';
        public $person3 = 'Teni';

        protected $person4 = 'kofo';
        private $person5 = 'femi';


//         function iterateObjects(){
//            foreach ($this as $key => $value){
//                print "$key => $value<br>";
//
//            }
//         }
    }
 $people = new People;

    foreach($people as $key => $value){
        print "$key => $value <br>";

    }

//$people->iterateObjects();
?>