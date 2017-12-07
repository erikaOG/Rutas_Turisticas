<?php
class foto
{
   public $idFoto;
   public $foto;
   public $idLugar;

   function __construct($idFoto,$foto,$idLugar){
      $this->idFoto = $idFoto;
      $this->foto = $foto;
      $this->idLugar = $idLugar;
   }
}
?>