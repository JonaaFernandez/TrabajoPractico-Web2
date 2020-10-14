{include file="header.tpl"}


<h1 class="mx-auto display-4 mt-4"> Ingresar </h1>


    <div class="wrapper fadeInDown">
        <div id="formContent">
           
           
            <h2 class="mx-auto display-4 mt-4"> 
                 {$message} 
            </h2>

            <!-- Login Form -->
            <form action="verificarUsuario" method="post">
                <input type="text" id="user" class="fadeIn w-75 h-25 second border border-primary mt-4" name="input_user" placeholder="user">
                {* <input type="text" id="email" class="fadeIn w-75  h-25 second border border-primary mt-2" name="input_email" placeholder="e-mail"> *}
                <input type="password" id="password" class="w-75 mt-2 mb-4 text-center fadeIn second border border-primary" name="input_password" placeholder="password">
                <input type="submit" class="fadeIn fourth border border-primary" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>








{include file="footer.tpl"}