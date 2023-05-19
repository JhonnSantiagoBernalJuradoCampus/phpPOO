<?php
   /*  class olla{
        public $lugares;
        private $merca;
        public function __construct(){
            
        }
        public function set_lugar($p1){
            $this->lugares = $p1; 
        }
        public function get_lugar(){
            return $this->lugares;
        }
        public function __destruct(){
            echo "Se ha allanado la ". __CLASS__;
        }
    }
    $obj = new olla(); */
    function data(){
        var_dump(func_get_arg(0));
    }
    data("miguel",23,true,["A","B"]);
?>