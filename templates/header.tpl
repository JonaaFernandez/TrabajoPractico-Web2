 <!DOCTYPE html>
 <html lang="en">

 <head>
     <base href="{BASE_URL}">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{$title}</title>
     <link rel="stylesheet" href="css/estilocomun.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/login.css">
     <script src="js/botones.js"></script>
 </head>

 <body class="body-bgc">

     <header>
         <div class="container flow">
             <nav class="navbar navbar-expand-lg  navbar-dark bg-dark shadow-sm navbarcolor">
                 <div class="container ">
                     <a href="#" class="navbar-brand">
                         <!-- Logo Image -->
                         <img src="images/logonuevo2.jpg" width="95" height="80 " alt=" " class=" align-middle mr-2 mt-1  ">
                         <!-- Logo Text -->

                         <span class="text-uppercase font-weight-bold "></span>

                     </a>

                     <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

                     <div id="navbarSupportedContent" class="collapse navbar-collapse">
                         <ul class="navbar-nav ml-auto">
                             <li class="nav-item "><a href="home" class="nav-link ">Home<span class="sr-only ">(current)</span></a></li>
                            
                            
                             {if isset($user)}
                                <li class="nav-item "><a href="ventas" class="nav-link ">Administrar Propiedades</a></li>
                                <li class="nav-item "><a href="verTodosLosTipos" class="nav-link ">Tipos de Propiedad</a></li>
                                <li class="nav-item "><a href="ventas" class="nav-link ">Ventas</a></li>
                                <li class="nav-item "><a href="alquileres" class="nav-link ">Alquileres</a></li>
                                <li class="nav-item "><a href="contacto" class="nav-link ">Contacto</a></li>    
                                <li class="nav-item "><a href="logout" class="nav-link ">Cerrar sesion</a></li>
                            {/if}
                             {if !isset($user)}
                                <li class="nav-item "><a href="ventas" class="nav-link ">Ventas</a></li>
                                <li class="nav-item "><a href="alquileres" class="nav-link ">Alquileres</a></li>
                                <li class="nav-item "><a href="contacto" class="nav-link ">Contacto</a></li>
                                <li class="nav-item "><a href="login" class="nav-link ">Iniciar sesion</a></li> 
                                {/if}
                         </ul>
                        </div>
                     </div>
                    
                 </div>
             </nav>
             {if isset($user)}
                <div class="row">
                <h4 class=" font-weight-light container mt-3  gris-color d-flex justify-content-end">Bienvenido:   <span class="font-weight-bold ml-2"> {$user}.</span></h4>
                </div>
             {/if}
          
         </div>
     </header>
     <!-- TERMINA NAV -->