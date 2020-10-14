{include file="header.tpl"}


<title>{$this->title}</title>

<h1 class="mt-3">{$title}</h1>

<div class="container">


</div>

<div class="container color-gris">

    <div class="form-group w-25">
        <label for="title">Tipo de Propiedad</label>
        <label class="form-control" value="{$prop}"> {$tipo} </label>
    </div>
    <div class="form-group">
        <label for="title">Nombre</label>
        <label for="title" class="form-control w-25" id="nombre" name="input_name" aria-describedby="input_name"> {$propiedad[0]->nombre}</label>
    </div>
    <div class="form-group">
        <label for="title"> Direccion </label>

        <label for="title" class="form-control w-25" id="adress" name="input_adress" aria-describedby="input_adress" value="{$propiedad[0]->direccion}">{$propiedad[0]->direccion}</label>

    </div>
    <div class="form-group">
        <label for="description">Descripcion</label>
        <label for="title" class="form-control w-75" id="description" name="input_description" value="'.$prop[0]->descripcion.'"> {$propiedad[0]->descripcion} </label>
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <label for="title" class="form-control w-25" id="value" name="input_value" value="{$prop[0]->valor}">U$S {$propiedad[0]->valor} </label>
    </div>
    <div class="form-group">
        <label for="Fecha de Ingreso">Fecha de Ingreso</label>
        <label for="title" type="date" class="form-control w-25" id="input_date" name="input_date" value="'.$prop[0]->fecha.'">{$propiedad[0]->fecha} </label>
        <label class="form-check-label" for=" "></label>
    </div>
 
   <a href="ventas" type="button" class="btn btn-primary  ml-0 bg-dark" value="volver" > VOLVER </a>
</div>









{include file="footer.tpl"}