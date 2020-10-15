<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 02:52:52
  from 'C:\xamppp\htdocs\TPWEB2\templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f879d648b8229_00853175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52dafcd98bc061f5ca38af6f746b49800d89d52c' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\TPWEB2\\templates\\agregarCategoria.tpl',
      1 => 1602723170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f879d648b8229_00853175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form method="post" action="<?php echo BASE_URL;?>
/insertarcategoria" class="d-flex flex-column">
            <div class="form-group  ml-3">
                <label for="CategoriaNueva" class="text-center">Categoria Nueva</label>
                <input type="text" class="form-control" id="NombreCategoriaNueva" name="CategoriaNueva" placeholder="Ingrese la categoria Nueva">
            </div>
            <div class="form-group ml-3">
                <button type="submit" class="btn btn-outline-danger btn-md">Insertar</button>
            </div>
        </form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
