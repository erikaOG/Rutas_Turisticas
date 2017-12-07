<?php

function cargarRoutersEspecificos() {
    define("routersEspecificosPath", "../routers/especificos/");
    $files = glob(routersEspecificosPath."*.php");
    foreach ($files as $filename) {
       include_once($filename);
    }
 }
 cargarRoutersEspecificos();
 
 class RouterFuncionalidadesEspecificas extends RouterBase
 {
    function route(){
       switch(strtolower($this->datosURI->controlador)){
          //case "login":
          //$routerLogin = new RouterLogin();
          //return json_encode($routerLogin->route());
          //break;
       }
    }
 }
 