<?php
class categoria
{
   public $idCategoria;
   public $descripcion;

   function __construct($idCategoria,$descripcion){
      $this->idCategoria = $idCategoria;
      $this->descripcion = $descripcion;
   }
}
?>