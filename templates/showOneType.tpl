{include file="header.tpl"}

<title>{$this->title}</title>

<h1 class="mt-3">Descripcion</h1>

<div class="container">
    <form action="verTodosLosTipos" method="get">
        <div class="form-group">
            <label for="title">Numero</label>
            <label for="title" class="form-control w-25">{$tipo[0]->id}</label>
        </div>
        <div class="form-group">
            <label for="title">Tipo de Propiedad</label>
            <label for="title" class="form-control w-25">{$tipo[0]->nombre}</label>
        </div>
        <div class="form-group">
            <label for="title">Descripcion</label>
            <label for="title" class="form-control">{$tipo[0]->descripcion}</label>
        </div>
        <button type="submit" class="btn btn-primary bg-dark">Siguiente</button>
    </form>
</div>

{include file="footer.tpl"}