{include file="header.tpl"}

        <form method="post" action="{BASE_URL}/editarProducto/{$Id}" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="NombreNuevo" class="text-center">Nombre nuevo</label>
                <input type="text" class="form-control" id="NombreProdEditar" name="NombreEditar" placeholder="Ingrese Nombre">
            </div>
            <div class="form-group ml-3">
                <label for="DescripcionNueva" class="text-center">Descripcion nueva</label>
                <input type="text" class="form-control" id="DescripcionEditar" name="DescripcionProdEditar"
                    placeholder="Descripcion">
            </div>
            <div class="form-group  ml-3">
                <label for="PrecioNuevo" class="text-center">Precio nuevo</label>
                <input type="number" class="form-control" id="PrecioProdEditar" name="PrecioEditar" placeholder="Precio">
            </div>
            <div class="form-group  ml-3">
                <label for="PrecioNuevo" class="text-center">Estado del producto nuevo</label>
                <input type="text" class="form-control" id="EstadoProdEditar" name="EstadoProdEditar" placeholder="Estado del Producto">
            </div>
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria nueva</label>
                <select name="CategoriaEditar">
                    {foreach from=$Categorias item=$categoria}
                    <option value="{$categoria.id_cat}">{$categoria.nombre_cat}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
            </div>
        </form>











{include file="footer.tpl"}