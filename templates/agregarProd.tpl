{include file="header.tpl"}

        <form method="post" action="{BASE_URL}/insertarnuevo" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="NombreNuevo" class="text-center">Nombre nuevo</label>
                <input type="text" class="form-control" id="NombreProdEditar" name="NombreNuevo" placeholder="Ingrese Nombre">
            </div>
            <div class="form-group ml-3">
                <label for="DescripcionNueva" class="text-center">Descripcion nueva</label>
                <input type="text" class="form-control" id="DescripcionEditar" name="DescripcionNuevo"
                    placeholder="Descripcion">
            </div>
            <div class="form-group  ml-3">
                <label for="PrecioNuevo" class="text-center">Precio nuevo</label>
                <input type="number" class="form-control" id="PrecioProdEditar" name="PrecioNuevo" placeholder="Precio">
            </div>
            <div class="form-group  ml-3">
                <label for="EstadoNuevo" class="text-center">Estado del producto nuevo</label>
                <select name="EstadoNuevo">
                <option value="Oferta">Oferta</option>
                <option value="Normal">Normal</option>
                </select>
            </div>
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria nueva</label>
                <select name="CategoriaNuevo">
                    {foreach from=$Categorias item=$categoria}
                    <option value="{$categoria.id_cat}">{$categoria.nombre_cat}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Insertar</button>
            </div>
        </form>




{include file="footer.tpl"}