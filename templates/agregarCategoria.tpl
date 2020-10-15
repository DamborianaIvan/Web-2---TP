{include file="header.tpl"}

        <form method="post" action="{BASE_URL}/insertarcategoria" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria Nueva</label>
                <input type="text" class="form-control" id="NombreCategoriaNueva" name="CategoriaNueva" placeholder="Ingrese la categoria Nueva">
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Insertar</button>
            </div>
        </form>




{include file="footer.tpl"}