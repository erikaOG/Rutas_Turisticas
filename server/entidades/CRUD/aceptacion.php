<?php
class aceptacion
{
   public $idAceptacion;
   public $descripcion;

   function __construct($idAceptacion,$descripcion){
      $this->idAceptacion = $idAceptacion;
      $this->descripcion = $descripcion;
   }
}
?>