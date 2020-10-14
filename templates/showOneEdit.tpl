{include file="header.tpl"}

{* <option checked value="">.....</option> *}

<title>{$this->title}</title>
</head>

<body>
    <h1 class="mt-4">{$title}</h1>

    <div class="container">

        <ul class="list-group">
        </ul>
    </div>

    <div class="container">
        <form action="editar" method="POST">
            <div class="form-group">
                <label for="title">Tipo de Propiedad </label>

                <select name="input_type" id="">

                    {foreach from=$tipo item=tp}
                        <option value="{$tp->id}" {if {$tp->id} == {$propiedad[0]->tipo}}
                                {" selected"}
                            {/if}
                            >{$tp->nombre}</option>
                    {/foreach}


                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="input_id" value="{$propiedad[0]->id}">
                <label for="title">Nombre</label>
                <input class="form-control" id="nombre" name="input_name" aria-describedby="input_name" value=" {$propiedad[0]->nombre}  ">
            </div>
            <div class="form-group">
                <label for="title"> Direccion </label>

                <input class="form-control" id="adress" name="input_adress" aria-describedby="input_adress" value=" {$propiedad[0]->direccion}">

            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input class="form-control" id="description" name="input_description" value="{$propiedad[0]->descripcion}">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="value" name="input_value" value="{$propiedad[0]->valor}">
            </div>
            <div class="form-group">
                <label for="Fecha de Ingreso">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="input_date" name="input_date" value="{$propiedad[0]->fecha}">
                <label class="form-check-label" for=" "></label>
                <button type="submit" class="btn btn-primary mt-4 bg-dark">Editar</button>
            </div>

        </form>
    </div>



    {include file="footer.tpl"}