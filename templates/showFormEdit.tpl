{include file="header.tpl"}


<h1 class="mt-4"> Modificar Datos</h1>
<div class="container mt-4">

    <form action="guardarMod" method="post">
        <div class="form-group">
            <input type="hidden" name="input_id" value=" {$tipo[0]->id}">
        </div>
        <div class="form-group">
            <label for="title">Nombre</label>
            <input type="text" class="form-control w-25 ml-5" name="input_name" value="{$tipo[0]->nombre}">
        </div>
        <div class="form-group">
            <label for="title">Descripcion</label>
            <input type="text" class="form-control w-75 ml-4" name="input_description" value="{$tipo[0]->descripcion}">
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Ingresar</button>

    </form>
</div>

{include file="footer.tpl"}