{include file="header.tpl"}
        <form method="post" action="{BASE_URL}/editarcategoria" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria a editar</label>
                <select name="EditCategoria">
                    {foreach from=$Categorias item=$categoria}
                    <option value="{$categoria.id_cat}">{$categoria.nombre_cat}</option>
                    {/foreach}
                </select>
                
            </div>
            <div class="form-group ml-3">
                <label for="NombreCategoriaEditar" class="text-center">Nombre de la Categoria Nueva</label>
                <input type="text" class="form-control" id="NombreCategoriaEditar" name="NombreCategoriaEditada"
                    placeholder="Categoria nueva">
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
            </div>
        </form>











{include file="footer.tpl"}