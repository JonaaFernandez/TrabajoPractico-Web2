<?php
require_once "UserController.php";
require_once "./View/PropertiesTypesView.php";
require_once "./Model/PropertiesTypesModel.php";



class PropertiesTypesController{

    private $cont;
    private $view;
    private $model;
    private $admin = 0;

    function __construct(){
        $this->view = new PropertiesTypesView();
        $this->model = new PropertiesTypesModel();
        $this->cont = new UserController();
    }

     private function checklogueado(){
 
        if (!isset($_SESSION['USERNAME'])){
        header("Location: " . LOGIN);
        die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)) { 
               
                $this->cont->LogOut();

            }
            $_SESSION['LAST_ACTIVITY'] = time();
        } 
    }



   function showAll(){
        $types = $this->model->GetAll();
        $this->view->ShowAllTypes($types);
        
    }

    
    function showType($params = null){
        $type = $params[':ID'];
        $oneType= $this->model->getType($type);
        $this->view->ShowOneType($oneType); 

    }


    function Insert(){
        $this->checklogueado();
        if ((isset($_POST['input_name'])) && (isset($_POST['input_description'])) && ($_POST['input_name']!= "")  && ($_POST['input_description'] !="" )) {
             $this->model->insert($_POST['input_name'],$_POST['input_description']);
             $this->view->ShowListLocation();
         } else {
            $this->view->showerror("Los datos ingresados son incorrectos");
        }
    }


    function delete($params = null){
        $this->checklogueado();
        $type_id = $params[':ID'];
        $this->model->delete($type_id);
        $this->view->ShowListLocation();
    }





    function showForEdit($params = null){
        $this->checklogueado();
        $type_id = $params[':ID'];
        $oneType= $this->model->getType($type_id);
        $this->view->ShowOneEdit($oneType);
    }


    function Edit(){
       $this->checklogueado();
       if ((isset($_POST['input_name'])) && (isset($_POST['input_description'])) && ($_POST['input_name']!= "")  && ($_POST['input_description'] !="" )) {
         $this->model->updateType($_POST['input_id'],$_POST['input_name'],$_POST['input_description']);
         $this->view->ShowListLocation();
        }    else {
        $this->view->showerror("Los datos ingresados son incorrectos");
        }
    }



}

?>