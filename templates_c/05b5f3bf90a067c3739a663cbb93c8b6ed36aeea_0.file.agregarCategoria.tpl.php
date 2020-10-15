<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 15:33:05
  from 'D:\xampp\htdocs\Web-2---TP\templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f884f9192c394_47182011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b5f3bf90a067c3739a663cbb93c8b6ed36aeea' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web-2---TP\\templates\\agregarCategoria.tpl',
      1 => 1602767453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f884f9192c394_47182011 (Smarty_Internal_Template $_smarty_tpl) {
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
