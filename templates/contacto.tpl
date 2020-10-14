{include file="header.tpl"}

 <div class="completo container mt-3">
        <section class="formulario col-xl-5">

            <h1 class="tituloFormTam" >FORMULARIO</h1>

            <form class="datosform w-75">
                Nombre y Apellido: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                Telefono: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                Correo Electronico: <input type="text" name="nombre" value="" />
            </form>
            <form class="datosform w-75">
                <p>Tipo de operacion:</p>
            </form>

            <select class="datosform ">
                <option value="Compra">Compra</option>
                <option value="Venta">Venta</option>
                <option value="Alquiler">Alquiler</option>
                <option value="Administracion">Administracion</option>
                <option value="Otro">Otro</option>
            </select>


            <p>Comentarios:</p>

            <textarea name="comentario" rows="2" cols="50">  </textarea>
            <p>Quiero recibir informacion a mi correo electronico acerca de novedades y promociones.</p>
            <input type="radio" name="syn" id="si" value="si">Si
            <input type="radio" name="syn" id="no" value="no">No

            <div class=cont_inf>
                <div>
                    <p id="mensaje"> Por favor, inserte el texto de la Imagen </p>
                    <form action="" id="idform"></form>
                    <input type="text" name="name" id="name"><br>
                    <button id=ingCap> Ingresar</button>
                </div>
                <div class="img_captaha">
                    <img src="images/img_captcha.jpg" class="d-flex mx-auto" width="200" height="60" alt="">
                </div>
            </div>
        </section>

        <div class="derecha col xl-2 ">
            <h1 class="textoderecha">Nos comunicaremos con usted a la brevedad. </h1>
            <img class="imgcontacto" src="images/fotocontacto.jpg" alt="">
            <h2 class="textoderecha grey-color">Gracias por elegirnos</h2>
        </div>

    </div>




{include file="footer.tpl"}