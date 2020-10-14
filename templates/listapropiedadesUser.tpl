{include file="header.tpl"}


<div class="w-75 mx-auto">


    <h2 class="display-4 text-capitalize grey-color container"> Propiedades en venta </h2>

    <table class="font-size-tabla mt-4 ml-2 mt-2 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> TIPO DE PROPIEDAD </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo "> VALOR en U$S</th>
        <th class="th-valor text-center th-prop th-acciones  th-borde-right "> ACCION</th>


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
                    <td class="p-0 border-btn th-borde-right"> <a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                </div>
    
            </tr>
        {/foreach}

    </table>
     
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
    {include file="footer.tpl"}