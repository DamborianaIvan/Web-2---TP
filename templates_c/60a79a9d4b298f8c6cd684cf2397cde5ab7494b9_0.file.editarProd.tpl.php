<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 18:17:48
  from 'C:\xamppp\htdocs\Web-2---TP\templates\editarProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88762cc9cbd3_49771322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a79a9d4b298f8c6cd684cf2397cde5ab7494b9' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Web-2---TP\\templates\\editarProd.tpl',
      1 => 1602778561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f88762cc9cbd3_49771322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form method="post" action="<?php echo BASE_URL;?>
/editarProducto/<?php echo $_smarty_tpl->tpl_vars['Id']->value;?>
" class="d-flex flex-column">
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_cat'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
            </div>
        </form>











<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
