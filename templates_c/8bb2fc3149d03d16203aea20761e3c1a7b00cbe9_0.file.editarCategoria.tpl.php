<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 14:21:58
  from 'C:\xamppp\htdocs\TPWEB2\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f883ee6aa5795_57995375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb2fc3149d03d16203aea20761e3c1a7b00cbe9' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\TPWEB2\\templates\\editarCategoria.tpl',
      1 => 1602764454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f883ee6aa5795_57995375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<pre><?php echo var_dump($_smarty_tpl->tpl_vars['Categorias']->value);?>
</pre>
        <form method="post" action="<?php echo BASE_URL;?>
/editarcategoria" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria a editar</label>
                <select name="CategoriaaEditar">
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
                <label for="NombreCategoriaEditar" class="text-center">Nombre de la Categoria Nueva</label>
                <input type="text" class="form-control" id="NombreCategoriaEditar" name="NombreCategoriaEditar"
                    placeholder="Categoria nueva">
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
            </div>
        </form>











<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
