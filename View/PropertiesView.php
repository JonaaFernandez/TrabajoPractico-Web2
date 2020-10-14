<?php
/* require_once('Controller/PropertiesController'); */ 
require_once('libs/smarty/Smarty.class.php');

class PropertiesView{
   
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
    
   
    function ShowHome(){
        $this->smarty->assign('title', $this->title);
        $this->smarty->display('templates/home.tpl');   
       /*  $smarty->display('templates/alquileres.tpl');   
        $smarty->display('templates/contacto.tpl');       QUEDARON ANDANDO TODAS!
        $smarty->display('templates/login.tpl');   
        $smarty->display('templates/ventas.tpl');   
 */
    }

    function ShowAlquileres(){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
      
        $smarty->display('templates/alquileres.tpl');   
       /*  $smarty->display('templates/alquileres.tpl');   
        $smarty->display('templates/contacto.tpl');       QUEDARON ANDANDO TODAS!
        $smarty->display('templates/login.tpl');   
        $smarty->display('templates/ventas.tpl');   
 */
    }

    
    
    function ShowContacto(){
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->display('templates/contacto.tpl'); 
    }

    



function showAll($prop,$typeProp/* ,$admin */){   //VENTAS
    $propiedad=$prop;
    $tipo=$typeProp;
    $smarty = new Smarty();  
    $smarty->assign('title', $this->title); 
    $smarty->assign('propiedad', $prop); 
    $smarty->assign('tipo', $typeProp);
     /*     $smarty->assign('admin', $admin); */
    $smarty->display('templates/listapropiedades.tpl');                
    }

     /* function showAllUser($prop,$typeProp,$admin){   
            $propiedad=$prop;
            $tipo=$typeProp;
            $smarty = new Smarty();  
            $smarty->assign('title', $this->title); 
            $smarty->assign('propiedad', $prop); 
            $smarty->assign('tipo', $typeProp);
            $smarty->assign('admin', $admin);
            $smarty->display('templates/listapropiedadesUser.tpl');                
            }    */
    

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }


    function ShowListLocation(){
        header("Location: ".BASE_URL."ventas");
    }

    
    function showformNew($typeProp){
        $smarty = new Smarty(); 
        $smarty->assign('title', 'Alta de Propiedad'); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->display('templates/altaprop.tpl');
    }

    function showOneEdit($prop,$typeProp){
        $id=$prop[0]->id;
        $tipo = $prop[0]->tipo;
        $nombre = $prop[0]->nombre;
        $direccion=$prop[0]->direccion;
        $descripcion=$prop[0]->descripcion;
        $fecha=$prop[0]->fecha;
        $valor=$prop[0]->valor; 
        $this->title="Actualizar datos";
        $smarty = new Smarty();  
        $smarty->assign('title', $this->title); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->display('templates/showOneEdit.tpl');
       
    }


function showForEditProp($prop,$typeProp){
    $tipo = $prop[0]->tipo;
    $nombre = $prop[0]->nombre;
    $direccion=$prop[0]->direccion;
    $descripcion=$prop[0]->descripcion;
    $fecha=$prop[0]->fecha;
    $valor=$prop[0]->valor;
    $html = '
    <!doctype html>
    <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>'.$this->title.'</title>
        </head>
        <body>
        <h1>'.$this->title.'</h1>

        <div class="container">

        <ul class="list-group">';
            $html .= '</ul>
        </div>

        <div class="container">
            <form action="mostrar" method="post">
                <div class="form-group">
                <label for="title">Tipo de Propiedad</label>
                <select name="ID" value="'.$prop[0]->tipo.'">';
                    foreach ($typeProp as $type) {
                        $html .= '  <option value =' .  $type->id . 
                        '> '. $type->nombre .' </option>';

                };
                
                
 $html .='</select>
         </div>   
            <div class="form-group">
                    <label for="title">Nombre</label>
                    <input class="form-control" id="nombre" name="input_name" aria-describedby="input_name" value="'. $prop[0]->nombre.'">
            </div>
            <div class="form-group">
                    <label for="title"> Direccion </label>
                                    
                <input class="form-control" id="adress" name="input_adress" aria-describedby="input_adress" value=" ' . $prop[0]->direccion .'">
                    
             </div>
            <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input class="form-control" id="description" name="input_description" value="'.$prop[0]->descripcion.'" >
            </div>
            <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="value"  name="input_value" value="'.$prop[0]->valor.'">
            </div>
            <div class="form-group">
                    <label for="Fecha de Ingreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" id="input_date" name="input_date" value="'.$prop[0]->fecha.'">
                    <label class="form-check-label" for=" "></label>
            </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://sm/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            </body>
        </html>';

        echo $html;
    }



      
    function showOne($prop,$typeProp){
      
        $smarty = new Smarty();  
        $smarty->assign('title', 'Datos de la propiedad'); 
        $smarty->assign('propiedad', $prop); 
        $smarty->assign('tipo', $typeProp); 
        $smarty->display('templates/showOne.tpl'); 
    }
}




?>