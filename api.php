<?php
    class olla{
        public $lugares;
        private $merca;
        public function __construct(){
            
        }
        
        /* public function __destruct(){
            echo "Se ha allanado la ". __CLASS__;
        } */
        public function set_lugar($p1){
            $this->lugares = $p1; 
        }
        public function get_lugar(){
            return $this->lugares;
        }
    }
    $obj = new olla();


?>