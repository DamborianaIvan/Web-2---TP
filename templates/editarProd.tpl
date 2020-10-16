{include file="header.tpl"}

        <form method="post" action="{BASE_URL}/editarProducto/{$Id}" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="NombreEditar" class="text-center">Nombre nuevo</label>
                <input type="text" class="form-control" id="NombreProdEditar" name="NombreEditar" placeholder="Ingrese Nombre" required>
            </div>
            <div class="form-group ml-3">
                <label for="DescripcionEditar" class="text-center">Descripcion nueva</label>
                <input type="text" class="form-control" id="DescripcionEditar" name="DescripcionProdEditar"
                    placeholder="Descripcion" required>
            </div>
            <div class="form-group  ml-3">
                <label for="PrecioProdEditar" class="text-center">Precio nuevo</label>
                <input type="number" class="form-control" id="PrecioProdEditar" name="PrecioEditar" placeholder="Precio" required>
            </div>
            <div class="form-group  ml-3">
                <label for="EstadoProdEditar" class="text-center">Estado del producto nuevo</label>
                <select name="EstadoProdEditar">
                    <option value="Ninguno">----</option>              
                    <option value="Oferta">Oferta</option>
                    <option value="Normal">Normal</option>
                </select>
            </div>
            <div class="form-group  ml-3">
                <label for="CategoriaEditar" class="text-center">Categoria nueva</label>
                <select name="CategoriaEditar">
                    <option value="Ninguno">----</option>
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