<?php
require_once('animal.php');
    class frog extends animal{
        public $legs = 4;
        
        //@Override
        public function get_Legs(){
            return $this->legs;
            }

        function jump(){
            echo "Hop Hop";
        }
    }
?>