<?php 

    class Prodotti{

        public $genere;

        public $tipo;

        public $marca;

        public function __construct($_genere, $_tipo) {
            $this->genere = $_genere;
            $this->tipo = $_tipo;
        }
        
    }

?>