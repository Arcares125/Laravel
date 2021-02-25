<?php

    class animal {

        private $name;
        private $legs = 2;
        private $cold_blooded = "False";
 
    public function __construct($nama) {
            $this->name=$nama;
        }
//setter
    public function set_Name($nama){
        return $this->name = $nama;
        }

    public function set_Legs($kaki){
        return $this->name = $kaki;
        }

    public function set_Blood($darah){
        return $this->name = $darah;
        }

//getter
    public function get_Name(){
        return $this->name;
        }

    public function get_Legs(){
        return $this->legs;
        }

    public function get_Blood(){
        return $this->cold_blooded;
        }

    }
?>
