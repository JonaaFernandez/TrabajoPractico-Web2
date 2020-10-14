{include file="header.tpl"}

<div class="container">
    <ul class="list-group">
    </ul>
</div>

<h1 class="gris-color display-4 mx-auto mt-4">
{$title}
</h1>

<div class="container mt-4">
    <form action="insert" method="post">
        <div class="form-group">
            <label for="title">Tipo de Propiedad: </label>
            <select name="input_type">
                {foreach from=$tipo item=tp}
                    <option value="{$tp->id}"> {$tp->nombre} </option>
                {/foreach}
            </select>
        </div>
        <div class="form-group w-50">
            <label for="title">Nombre</label>
            <input class="form-control" id="nombre" name="input_name" aria-describedby="inmput_name">
        </div>
        <div class="form-group w-50">
            <label for="title">Direccion</label>
            <input class="form-control" id="adress" name="input_adress" aria-describedby="inmput_adress">

        </div>

        <div class="form-group w-50">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="value" name="input_value">
        </div>
        <div class="form-group w-50">
            <label for="Fecha de Ingreso">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="input_date" name="input_date">

        </div>
        <div class="form-group ">
            <label for="description">Descripcion</label>
            <textarea name="input_description" id="description" class="form-control w-50" rows="3" cols="20">  </textarea>
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Agregar</button>
    </form>
</div>



{include file="footer.tpl"}