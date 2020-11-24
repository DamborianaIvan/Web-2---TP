<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 15:05:15
  from 'C:\xampp\htdocs\Web-2---TP\templates\editarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd131b45ed65_74876118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '013b339048f0d9b2e12e3b5bc5a3f5624d347140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2---TP\\templates\\editarUsuario.tpl',
      1 => 1606226708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbd131b45ed65_74876118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method="post" action="<?php echo BASE_URL;?>
/editarUsuario/" class="d-flex flex-column">
        <div class="form-group  ml-3">
            <label for="CategoriaNueva" class="text-center">Usuario a editar</label>
            <select name="EditUsuario">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_user'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
