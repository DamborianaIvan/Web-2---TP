{include file="header.tpl"}
    <form method="post" action="{BASE_URL}/editarUsuario/" class="d-flex flex-column">
        <div class="form-group  ml-3">
            <label for="CategoriaNueva" class="text-center">Usuario a editar</label>
            <select name="EditUsuario">
                {foreach from=$Usuarios item=$usuario}
                <option value="{$usuario.id_user}">{$usuario.nombre_user}</option>
                {/foreach}
            </select>
        </div>
        <div class="form-group ml-3">
        <select name="PrioridadNueva">
            <option value="0">Usuario Normal</option>
            <option value="1">Administrador</option>
        </select>
        </div>
        <div class="form-group ml-3">
            <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
        </div>
    </form>
    {include file="footer.tpl"}