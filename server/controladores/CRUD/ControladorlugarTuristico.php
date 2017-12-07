<?php
include_once('../controladores/ControladorBase.php');
include_once('../entidades/CRUD/lugarTuristico.php');
class ControladorlugarTuristico extends ControladorBase
{
   function crear(lugarTuristico $lugarturistico)
   {
      $sql = "INSERT INTO lugarTuristico (idLugar,nombre,descripcion,email,direccion,idCategoria,idUbicacion) VALUES (?,?,?,?,?,?,?);";
      $parametros = array($lugarturistico->idLugar,$lugarturistico->nombre,$lugarturistico->descripcion,$lugarturistico->email,$lugarturistico->direccion,$lugarturistico->idCategoria,$lugarturistico->idUbicacion);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar(lugarTuristico $lugarturistico)
   {
      $parametros = array($lugarturistico->idLugar,$lugarturistico->nombre,$lugarturistico->descripcion,$lugarturistico->email,$lugarturistico->direccion,$lugarturistico->idCategoria,$lugarturistico->idUbicacion,$lugarturistico->id);
      $sql = "UPDATE lugarTuristico SET idLugar = ?,nombre = ?,descripcion = ?,email = ?,direccion = ?,idCategoria = ?,idUbicacion = ? WHERE id = ?;";
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
      $sql = "DELETE FROM lugarTuristico WHERE id = ?;";
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
         $sql = "SELECT * FROM lugarTuristico;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM lugarTuristico WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($pagina,$registrosPorPagina)
   {
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM lugarTuristico LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($registrosPorPagina)
   {
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM lugarTuristico;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado(string $nombreColumna, string $tipoFiltro, string $filtro)
   {
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM lugarTuristico WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM lugarTuristico WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM lugarTuristico WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM lugarTuristico WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}