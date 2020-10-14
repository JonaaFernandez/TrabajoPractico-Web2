{include file="header.tpl"}

<div class="container">

<h2 class="display-4 text-capitalize grey-color container mt-4 mb-4"> Altas </h2> 


    <table class="font-size-tabla  ml-2 mt-4 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> NUMERO </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo ">DESCRIPCION</th>
        <th class="th-valor text-center th-prop th-acciones "> </th>
        <th class="th-valor text-center th-prop th-acciones "> ACCIONES</th>
        <th class="th-valor text-center th-prop th-acciones th-borde-right "> </th>

        {foreach from=$tipo item=tp} {* tipos de propiedades *}
            <tr>
                {* <td class="td-prop text-center "> *}
                <td class="td-prop text-center">{$tp->id}</td>
                <td class="td-prop text-center">{$tp->nombre}</td>
                <td class="td-prop text-center">{$tp->descripcion}</td>
    
                <div class="acciones">
                    <td class="p-0 border-btn "> <a href="verTipo/{$tp->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                    <td class="p-0 border-btn "> <a href="modificarTipo/{$tp->id}" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                    <td class="p-0 th-borde-right border-btn"> <a href="eliminarTipo/{$tp->id}" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
    
                {* {/if} *}
            </div>

        </tr>
        {/foreach}
    </table>


    <div class="container mt-4">

        <p class="gris-color h2 ml-1"> Tipo de Propiedad </p>
        <form action="insertTipo" class="" method="post">
            <div class="form-group ">
                <label for="title" class="" >Nombre</label>
                <input type="text" class="w-50 altura-input ml-5" name="input_name" value="">
            </div>
            <div class="form-group ">
                <label for="title " class="">Descripcion</label>
                <input type="text" class="w-75 altura-input ml-4" name="input_description" value="">
            </div>
            <button type="submit" class="btn btn-primary bg-dark">Ingresar</button>
    </div>
    </form>
</div>
</div>
{include file="footer.tpl"}