
<table>
   {*  <th> TIPO DE PROPIEDAD </th>
    <th>.......................................NOMBRE............................................</th>
    <th>..............DIRECCION...................</th>
    <th>VALOR</th>'; *}

   
    {foreach from=$propiedad item=tipoprop} {* propiedades *}
        <tr>
            <td>
                {foreach from=$tipo item=tipos} {* tipos de propiedad *}
        
                    {if ($tipos->id == $tipoprop->tipo)}
                        {$tipos->nombre};
            
                    </td>
                {/if}
            {/foreach}

        <td>{$tipoprop->nombre}</td>
        <td>{$tipoprop->direccion}</td>
        <td>{$tipoprop->descripcion}</td>
        <td>{$tipoprop->valor}</td>
        <td>{$tipoprop->fecha}</td>
    
        </tr>
    {/foreach}
