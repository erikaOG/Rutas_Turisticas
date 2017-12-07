<?php
class ubicacion
{
   public $idUbicacion;
   public $latitud;
   public $longitud;
   public $altitud;

   function __construct($idUbicacion,$latitud,$longitud,$altitud){
      $this->idUbicacion = $idUbicacion;
      $this->latitud = $latitud;
      $this->longitud = $longitud;
      $this->altitud = $altitud;
   }
}
?>