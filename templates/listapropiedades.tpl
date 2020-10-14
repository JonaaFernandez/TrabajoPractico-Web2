{include file="header.tpl"}

<div class="w-75 mx-auto">
{if isset($user)}
        <h2 class="display-4 text-capitalize grey-color container"> Administrar </h2>
    {/if}
    {if !isset($user)}
        <h2 class="display-4 text-capitalize grey-color container">Propiedades en venta</h2>
    {/if}
    <table class="font-size-tabla mt-4 ml-2 mt-2 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> TIPO DE PROPIEDAD </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo "> VALOR en U$S</th>

        {if !isset($user)}
            <th class="th-valor text-center th-prop th-acciones th-borde-right "> ACCIONES</th>
        {/if}


        {foreach from=$propiedad item=tipoprop} {* propiedades *}
            <tr>
                <td class="td-prop text-center ">
                    {foreach from=$tipo item=tipos} {* tipos de propiedad *}
                        {if ($tipos->id == $tipoprop->tipo)}
                            {$tipos->nombre}
                        </td>
                    {/if}
                {/foreach}
    
    
                <td class="td-prop text-center">{$tipoprop->nombre}</td>
                <td class="td-prop text-center"> U$S {$tipoprop->valor}</td>
    
                <div class="acciones">
                {if !isset($user)}
                        <td class="p-0 border-btn "><a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                        <td class="p-0 border-btn "><a href="modificar/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                        <td class="p-0 th-borde-right border-btn"> <a href="eliminar/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
                    {/if}
                    {if isset($user)}
                        <td class="p-0 border-btn  th-borde-right"> <a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                    {/if}
                </div>
    
            </tr>
        {/foreach}

    </table>
    {* PARA USUARIOS Y ADMIN *}
</div>
<p></p>
<div class="container">
    <div class="container">
        <form action="mostrarPorTipo" method="POST">
            <div class="form-group mr-5">
                <label for="title" class="offset-1 ">Seleccione el tipo de Propiedad </label>
                <select name="input_type" id="">
                    {foreach from=$tipo item=tp}
                        <option value="{$tp->id}"> {$tp->nombre} </option>
                    {/foreach}
                </select>
                <button type="submit" class="ml-3 btn btn-primary bg-dark">Seleccionar</button>

            </div>
        </form>
    </div>
    {* SOLO PARA ADMIN *}
    {if !isset($user)}
        <div class=" container mt-4 row">
            <p class=" gris-color h2 ml-1"> Dar de alta </p>
            <form action="alta" method="get">
                <div class=" d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary bg-dark ml-4">Continuar</button>
                </div>
            </form>
        </div>
    </div>
{/if}

{include file="footer.tpl"}