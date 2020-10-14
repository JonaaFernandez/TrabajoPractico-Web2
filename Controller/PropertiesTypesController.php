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
        //$this->typeModel = new PropertiesTypesModel;
        $this->cont = new UserController();
    }

     private function checklogueado(){
        /* session_start();
 */
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
        $this->model->insert($_POST['input_name'],$_POST['input_description']);
        $this->view->ShowListLocation();
    }


    function delete($params = null){
        $this->checklogueado();
        $type_id = $params[':ID'];
        $this->model->delete($type_id);
        $this->view->ShowListLocation();
    }



    /* function showTipe($params = null){
        $type_id = $params[':ID'];
        $type_id= $this->model->getProp($prop_id);
        $id=$oneProp[0]->tipo;
        $typeProp = $this->typeModel->GetType($id);
        $type=$typeProp[0]->nombre; 
       $this->view->ShowOne($oneProp,$type); 
    } */


    function showForEdit($params = null){
        $this->checklogueado();
        $type_id = $params[':ID'];
        $oneType= $this->model->getType($type_id);
        $this->view->ShowOneEdit($oneType);
    }


    function Edit(){
       $this->checklogueado();
       $this->model->updateType($_POST['input_id'],$_POST['input_name'],$_POST['input_description']);
       $this->view->ShowListLocation();
    } 
 


  /*      
    function showForEdit($params = null){
        $type = $params[':ID'];
        $oneType= $this->model->getType($type);
        //$typeProp = $this->typeModel->GetAll();
        $this->view->ShowOneEdit($oneType);
      
    }

 
    function Edit(){
        $id = ($_POST['input_id']);
        $this->model->updateType($_POST['input_id'],$_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_value'],$_POST['input_description'],$_POST['input_date']);
        $this->view->ShowListLocation();
    } */
 

  


/* 


    function cargaProp($params = null){
        $prop_id = $params[':ID'];
        $prop = $this->model->GetProp($prop_id);
        $typeProp = $this->typeModel->GetAllTypesProp();
        $this->view->ShowOneEdit($prop,$typeProp);
        
    }

   


    function formNew(){
        $typeProp = $this->typeModel->GetAllTypesProp();
        $this->view->showFormNew($typeProp);
    }

 
  
    function InsertProp(){
        $typeProp = $this->typeModel->GetAllTypesProp();
        $this->model->insertProp($_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_description'],$_POST['input_value'],$_POST['input_date']);
        $this->view->showformNew($typeProp);
    }

   

    
    function EditProp(){
        $id = ($_POST['input_id']);
        $this->model->updateProp($_POST['input_id'],$_POST['input_type'],$_POST['input_name'],$_POST['input_adress'],$_POST['input_value'],$_POST['input_description'],$_POST['input_date']);
        $this->view->ShowListLocation();
    }
 

    function viewOne($params = null){
        $prop_id = $params[':ID'];
        $oneProp= $this->model->getProp($prop_id);
        $id=$oneProp[0]->tipo;
        $typeProp = $this->typeModel->GetType($id);
        $type=$typeProp[0]->nombre; 
       $this->view->ShowOne($oneProp,$type); 
    }



  
/*
    function MarkAsCompletedTask($params = null){
        $task_id = $params[':ID'];
        $this->model->MarkAsCompletedTask($task_id);
        $this->view->ShowHomeLocation();
    }*/ 

}

?>