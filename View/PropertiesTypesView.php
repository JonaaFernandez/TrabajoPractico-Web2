<?php

require_once('libs/smarty/Smarty.class.php');
//require_once(' propertiesView.php');

class PropertiesTypesView{
   
    private $title;
    
    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->smarty = new Smarty(); 

        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }         
        if(isset($_SESSION['USERNAME'])){
            $this->smarty->assign('user', $_SESSION['USERNAME']);
        }
    } 
 
    



function showAllTypes($type){   // muestra todos los tipos de propiedad
    $tipo=$type;
    $smarty = new Smarty();  
    $smarty->assign('title', $this->title); 
    $smarty->assign('tipo', $tipo);
   // $smarty->assign('admin', $admin);
    $smarty->display('templates/listaTipos.tpl');

    }



    function ShowListLocation(){
        header("Location: ".BASE_URL."verTodosLosTipos");
    }



    function ShowOneType($oneType){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
    // $smarty->assign('admin', $admin);
        $smarty->display('templates/showOneType.tpl');

    }
        


    function ShowOneEdit($oneType){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('tipo', $oneType);
    // $smarty->assign('admin', $admin);
        $smarty->display('templates/showFormEdit.tpl');

    }



    

}




?>