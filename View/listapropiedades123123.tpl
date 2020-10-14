{include file="header.tpl"}

{* CON 3 BOTONES *}
<div class="container">


    <table class="font-size-tabla  ml-2 mt-4 tabla">
        <th class="th-tipo text-center th-prop th-prop-largo"> TIPO DE PROPIEDAD </th>
        <th class="th-nombre text-center th-prop th-prop-largo ">NOMBRE</th>
        <th class="th-valor text-center th-prop th-prop-largo "> VALOR</th>
        <th class="th-valor text-center th-prop th-acciones "> </th>
        <th class="th-valor text-center th-prop th-acciones "> ACCIONES</th>
        <th class="th-valor text-center th-prop th-acciones th-borde-right "> </th>

        {foreach from=$propiedad item=tipoprop} {* propiedades *}
            <tr>
                <td class="td-prop text-center ">
                    {foreach from=$tipo item=tipos} {* tipos de propiedad *}
                        {if ($tipos->id == $tipoprop->tipo)}
                            {$tipos->nombre};
            
                        </td>
                    {/if}
                {/foreach}
    
                <td class="td-prop text-center">{$tipoprop->nombre}</td>
                <td class="td-prop text-center">{$tipoprop->valor}</td>
    
                <div class="acciones">
                    <td class="p-0 border-btn "> <a href="ver/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-ver "> VER </td>
                    {* {if ($admin == 1)} *}
                        <td class="p-0 border-btn "> <a href="modificar/{$tipoprop->id}" class="p-1 m-1 bg-dark ancho-modif"> MODIFICAR </td>
                        <td class="p-0 th-borde-right border-btn"> <a href="eliminar/{$tipoprop->id}" class=" p-1 m-1 bg-dark ancho-ver"> ELIMINAR </td>
        
                    {* {/if} *}
                </div>
    
            </tr>
        {/foreach}
</div>
{* TERMINA LA PRIMER TABLA *}


<table class="font-size-tabla mx-auto ml-2  table-w">
    <th class="th-tipo text-center"> TIPO DE PROPIEDAD </th>
    <th class="th-nombre text-center">NOMBRE</th>
    <th class="th-valor text-center"> VALOR</th>

    {foreach from=$propiedad item=tipoprop} {* propiedades *}
        <tr>
            <td class="bg-dark">
                {foreach from=$tipo item=tipos} {* tipos de propiedad *}
        
                    {if ($tipos->id == $tipoprop->tipo)}
                        {$tipos->nombre};
            
                    </td>
                {/if}
        
        
        
            {/foreach}
    
            <td>{$tipoprop->nombre}</td>
            <td>{$tipoprop->valor}</td>
    
    
    
    
            <div class="acciones">
                <td> <input type="button" value="modificar" class="w-25 p-1 m-1">
                    {* {if ($admin == 1)} *}
                    <td> <a href="modificar/{$tipoprop->id}">MODIFICARLOS</a> </td>
                    <td> <a href="eliminar/{$tipoprop->id}">ELIMINAR</a> </td>
                {* {/if} *}
            </div>
    
    
    
    
    
        </tr>
    {/foreach}

    {* // filtra nombre de Tipo de propiedad por ID
    { for ($i=0; $i< count($propiedad); $i++) { $html.=} <tr>
        <td class="w-25">{;
            for ($j=0; $j<count($tipo); $j++){ if ($tipo[$j]->id == $propiedad[$i]->tipo){
                $html.= $tipo[$j]->nombre;
                }

                };
                $html.= }</td>
        <td class="w-50"> {$propiedad[$i]->nombre}</td>
        <td> {$propiedad[$i]->direccion}</td>
        <td> U$S {$propiedad[$i]->valor}'</td>
        </tr>'
        ;
        }; *}
        {* {include file="mostrarprop.tpl"} *}


        {include file="footer.tpl"}