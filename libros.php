<?php
 class libros {
   public function __construct(protected int $paginas) {
      $this->paginas = $paginas;
      echo "haciendo pruebas";
   }
  
  public function getPaginas() {
     return $this->paginas;
  }
 }
?>
