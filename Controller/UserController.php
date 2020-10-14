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
                   /*  $this->admin = 1; */
                    $_SESSION['USERNAME']= $userFromDB->user;
                    $_SESSION['LAST_ACTIVITY'] = time();
                     $this->view->BackHome(/* $user */);     

               /*      header("Location: ".BASE_URL."home");  */              
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
        /* $this->admin = 0; */
     /* header ("Location" . LOGIN); */
          $this->view->BackHome();  
    }
   }



      /* DESDE ACA */
        /* if (isset($user)){
            $userFromDB = $this->model-> Getuser ($user);
            if (isset($userFromDB)){
                   //existe el usuario
                 $passw = $userFromDB->password ;
                
    
            if (password_verify($password, $passw)){
    
                header("Location: ".BASE_URL."home");
                
            }
            else{
                $this->view->ShowLogin("Contraseña Incorrecta");
    
            }
        } 
        
    }
        
        else {
        // NO existe el usuario en la base de datoss
        $this->view->ShowLogin("EL USUARIO NO EXISTE WACHIN");
        }
    }   */
    /* HASTA ACA */ 

/*
    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }

    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);

            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario

                if (password_verify($pass, $userFromDB->password)){

                    session_start();
                    $_SESSION["EMAIL"] = $userFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();

                    header("Location: ".BASE_URL."home");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }*/




?>