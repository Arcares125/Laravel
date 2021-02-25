<?php
require_once('animal.php');
    class ape extends animal{
        public $legs = 2;

        //@Override
        public function get_Legs(){
            return $this->legs;
            }

        function yell(){
            echo "Auooo";
        }
    }
?>