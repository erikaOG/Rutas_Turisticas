<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/votosAceptacion.php');
class ControladorvotosAceptacion extends ControladorBase
{
   function crear(votosAceptacion $votosaceptacion)
   {
      $sql = "INSERT INTO votosAceptacion (idVotosAceptacion,idAceptacion,idLugar) VALUES (?,?,?);";
      $parametros = array($votosaceptacion->idVotosAceptacion,$votosaceptacion->idAceptacion,$votosaceptacion->idLugar);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(votosAceptacion $votosaceptacion)
   {
      $parametros = array($votosaceptacion->idVotosAceptacion,$votosaceptacion->idAceptacion,$votosaceptacion->idLugar,$votosaceptacion->id);
      $sql = "UPDATE votosAceptacion SET idVotosAceptacion = ?,idAceptacion = ?,idLugar = ? WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function borrar(int $id)
   {
      $parametros = array($id);
      $sql = "DELETE FROM votosAceptacion WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function leer($id)
   {
      if ($id==""){
         $sql = "SELECT * FROM votosAceptacion;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM votosAceptacion WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM votosAceptacion LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM votosAceptacion;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM votosAceptacion WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM votosAceptacion WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM votosAceptacion WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM votosAceptacion WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}