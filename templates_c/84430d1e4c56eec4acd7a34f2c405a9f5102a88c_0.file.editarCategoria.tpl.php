<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 19:11:40
  from 'D:\xampp\htdocs\Web-2---TP\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8882cc61b586_63411296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84430d1e4c56eec4acd7a34f2c405a9f5102a88c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web-2---TP\\templates\\editarCategoria.tpl',
      1 => 1602781817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8882cc61b586_63411296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <form method="post" action="<?php echo BASE_URL;?>
/editarcategoria" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria a editar</label>
                <select name="EditCategoria">
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
                <input type="text" class="form-control" id="NombreCategoriaEditar" name="NombreCategoriaEditada"
                    placeholder="Categoria nueva">
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Editar</button>
            </div>
        </form>











<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
