<?php
include_once('../routers/RouterBase.php');
include_once('../routers/RouterFuncionalidadesEspecificas.php');
function cargarRouters() {
   define("routersPath", "../routers/");
   $files = glob(routersPath."CRUD/*.php");
   foreach ($files as $filename) {
      include_once($filename);
   }
}
cargarRouters();

class RouterPrincipal extends RouterBase
{
   function route(){
      switch(strtolower($this->datosURI->controlador)){
         case "aceptacion":
            $routeraceptacion = new Routeraceptacion();
            return json_encode($routeraceptacion->route());
            break;
         case "categoria":
            $routercategoria = new Routercategoria();
            return json_encode($routercategoria->route());
            break;
         case "foto":
            $routerfoto = new Routerfoto();
            return json_encode($routerfoto->route());
            break;
         case "lugarturistico":
            $routerlugarTuristico = new RouterlugarTuristico();
            return json_encode($routerlugarTuristico->route());
            break;
         case "ubicacion":
            $routerubicacion = new Routerubicacion();
            return json_encode($routerubicacion->route());
            break;
         case "votosaceptacion":
            $routervotosAceptacion = new RoutervotosAceptacion();
            return json_encode($routervotosAceptacion->route());
            break;
         default:
            $routerEspeficias = new RouterFuncionalidadesEspecificas();
            return $routerEspeficias->route();
            break;
      }
   }
}
