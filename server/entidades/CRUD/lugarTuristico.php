<?php
class lugarTuristico
{
   public $idLugar;
   public $nombre;
   public $descripcion;
   public $email;
   public $direccion;
   public $idCategoria;
   public $idUbicacion;

   function __construct($idLugar,$nombre,$descripcion,$email,$direccion,$idCategoria,$idUbicacion){
      $this->idLugar = $idLugar;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->email = $email;
      $this->direccion = $direccion;
      $this->idCategoria = $idCategoria;
      $this->idUbicacion = $idUbicacion;
   }
}
?>