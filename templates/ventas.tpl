{include file="header.tpl"}



<table class="font-size-tabla mx-auto ml-2  table-w ">
    <th class="th-tipo text-center"> TIPO DE PROPIEDAD </th>
    <th class="th-nombre text-center">NOMBRE</th>
    <th class="th-dir text-center">DIRECCION</th>
    <th class="th-desc text-center"> DESCRIPCION</th>
    <th class="th-valor text-center"> VALOR</th>
    <th class="th-fecha text-center"> FECHA</th>

    {foreach from=$propiedad item=tipoprop} {* propiedades *}
        <tr>
            <td class="bg-dark">
                {foreach from=$tipo item=tipos} {* tipos de propiedad *}
        
                    {if ($tipos->id == $tipoprop->tipo)}
                        {$tipos->nombre};
            
                    </td>
                {/if}
            {/foreach}
            {* </td>
            <td class="w-50"> {$propiedad[$i]->nombre}</td>
            <td> {$propiedad[$i]->direccion}</td>
            <td> U$S {$propiedad[$i]->valor}</td>
        </tr>
        *}
        <td>{$tipoprop->nombre}</td>
        <td>{$tipoprop->direccion}</td>
        <td>{$tipoprop->descripcion}</td>
        <td>{$tipoprop->valor}</td>
        <td>{$tipoprop->fecha}</td>
    
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

       {include file="mostrarprop.tpl"} 

        {include file="footer.tpl"}