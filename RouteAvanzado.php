<?php
    require_once 'Controller/PropertiesController.php';
  /*   require_once 'Controller/PropertiesAdvanceController.php'; */
    require_once 'RouterClass.php';
    require_once 'Controller/UserController.php';
    require_once 'Controller/PropertiesTypesController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

 
 
 $r = new Router();

    
// "ruta", "VERBO", "Controlador", "metodo"

// ---------------------------------- BBDD - propiedades --------------------------------------
// llamamos al home
    $r->addRoute("home", "GET", "PropertiesController", "Home");
//llamamos a la pagina de alquileres
    $r->addRoute("alquileres", "GET", "PropertiesController", "alquileres");
//llamamos a la pagina de contacto   
    $r->addRoute("contacto", "GET", "PropertiesController", "contacto");

    // Formulario para dar de alta una propiedad
    $r->addRoute("alta", "GET", "PropertiesController", "formNew");

    // >recibe datos del Form  para dar de alta una propiedad
    $r->addRoute("insert", "POST", "PropertiesController", "insertProp");
  
// Mostrar todos
    $r->addRoute("ventas", "GET", "PropertiesController", "showAllProp");
 // Acá podría tener un formulario de inserción

  // Mostrar uno
    $r->addRoute("ver/:ID", "GET", "PropertiesController","viewOne");
    //$r->addRoute("mostrar/:ID", "GET", "PropertiesController", "viewOne");
// llama al form para modificar
    $r->addRoute("modificar/:ID", "GET", "PropertiesController", "cargaProp");
// lee los datos del form  y modifica los datos   
    $r->addRoute("editar", "POST", "PropertiesController", "editProp");
// elimina un elemento de la tabla 
    $r->addRoute("eliminar/:ID", "GET", "PropertiesController", "delProp");
    $r->addRoute("mostrarPorTipo", "POST", "PropertiesController", "showByType");
 

//---------------------------------------- BBDD - user -----------------------------------------

    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("verificarUsuario", "POST", "UserController", "VerifyUser");
    $r->addRoute("logout", "GET", "UserController", "LogOut");
 
// ---------------------------------- BBDD - tipos_propiedades ---------------------------------
 
// Mostrar todos
$r->addRoute("verTodosLosTipos","GET", "PropertiesTypesController", "showAll");

$r->addRoute("verTipo/:ID","GET", "PropertiesTypesController", "showType");
 
$r->addRoute("modificarTipo/:ID","GET", "PropertiesTypesController", "showForEdit");

$r->addRoute("guardarMod","POST", "PropertiesTypesController", "edit");

$r->addRoute("insertTipo","POST", "PropertiesTypesController", "insert");

$r->addRoute("eliminarTipo/:ID","GET", "PropertiesTypesController", "delete");

 
 
 
    // Acá podría tener un formulario de edición
/*
 // Formulario para nuevo dinosaurio
 $router->addRoute("dinosaurio", "GET", "DinosaurioController", "formNew");

 // Acción formulario nuevo dinosaurio
 $router->addRoute("dinosaurio", "POST", "DinosaurioController", "new");

 // Acción de editar dinosaurio
 $router->addRoute("dinosaurio/:ID", "POST", "DinosaurioController", "edit");

 // Elimina un dinosaurio
 $router->addRoute("dinosaurio/:ID", "DELETE", "DinosaurioController", "delete");
 $router->addRoute("dinosaurio/:ID/delete", "GET", "DinosaurioController", "delete");
  /*
 // Por defecto mostrar todos
 $router->setDefaultRoute("DinosaurioController", "getAll");

    //Advance
   //  $r->addRoute("autocompletar", "GET", "rStateController", "AutoCompletar");*/



    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
?>