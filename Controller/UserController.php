<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController{

    private $view;
    private $model;
    private $admin;


    function __construct(){
        $this->title = "Tu Inmobiliaria";
        $this->view = new UserView();
        $this->model = new UserModel();

    }


    function Login(){
        $this->view->ShowLogin();

    }

    function VerifyUser(){
  
        $user = $_POST['input_user'];
        $passw = $_POST['input_password'];
       /*  $email = $_POST["input_email"]; */

        if(isset($user)){
            $userFromDB= $this->model->Getuser($user);
            
            if(isset($userFromDB) && $userFromDB){               
                if(password_verify($passw, $userFromDB->password)){
                    
                    session_start();
                   
                    $_SESSION['USERNAME']= $userFromDB->user;
                    $_SESSION['LAST_ACTIVITY'] = time();
                     $this->view->BackHome();     

                          
                }else{
                    $this->view->ShowLogin("Contraseña Incorrecta");                   
                }
            }else{
                $this->view->ShowLogin("Usuario Inexistente");             
            }
        }     
    }

    function LogOut(){
        session_start();
        session_destroy();
        $this->view->BackHome();  
    }
   }

?>