<?php
class votosAceptacion
{
   public $idVotosAceptacion;
   public $idAceptacion;
   public $idLugar;

   function __construct($idVotosAceptacion,$idAceptacion,$idLugar){
      $this->idVotosAceptacion = $idVotosAceptacion;
      $this->idAceptacion = $idAceptacion;
      $this->idLugar = $idLugar;
   }
}
?>