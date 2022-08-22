<?php
// esta clase es para registro de los productos.
// es claro que sera abstracto.
    class Ch2_Product {
        protected $_type = 'Book';
        protected $_paginas = 10;
        
        public function setType($_type) {
            $this->_type = $_type;
        }

        public function getType(){
            return $this->_type;
        }
        
        public function getNumPages() {
            return $this->_paginas;
        }
        
    }
?>
