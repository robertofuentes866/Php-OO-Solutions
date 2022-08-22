<?php
 class libros {
   public function __construct(protected int $paginas) {
      $this->paginas = $paginas;
    
   }
  
  public function getPaginas() {
     return $this->paginas;
  }
 }
?>
