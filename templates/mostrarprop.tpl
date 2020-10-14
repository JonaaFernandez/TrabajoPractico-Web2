<div class="container">
    <form action="mostrar" method="post">
        <div class="form-group">
            <label for="title">Seleccione Propiedad</label>
            <select name="ID">
                {foreach from $prop item=$pr}
                    <option value= $pr->id  $pr->nombre  </option>
                    <input type="hidden" name="ID" value $pr->id >

                {/foreach}

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Seleccionar</button>
    </form>
</div>