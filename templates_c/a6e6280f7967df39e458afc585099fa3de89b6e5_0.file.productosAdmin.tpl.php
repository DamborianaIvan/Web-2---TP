<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 18:10:03
  from 'C:\xamppp\htdocs\TPWEB2\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8722db1f0664_70714916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6e6280f7967df39e458afc585099fa3de89b6e5' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\TPWEB2\\templates\\productosAdmin.tpl',
      1 => 1602691801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8722db1f0664_70714916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5 border border-dark">
    <h1 class="text-center mt-5">Productos ADMIN</h1>
    <div class="container text-center">
        <h3 class="mt-5">Categorias</h3>
        <div class="container">
            <ul class="d-flex justify-content-between lista-cat">
                <li><a href="<?php echo BASE_URL;?>
/productos">Todos</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'Categoria');
$_smarty_tpl->tpl_vars['Categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Categoria']->value) {
$_smarty_tpl->tpl_vars['Categoria']->do_else = false;
?>
                    <li><a href="<?php echo BASE_URL;?>
/productosbycategoria/<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['nombre_cat'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
    <div class="row justify-content-around mt-4">      
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>        
                    <div class="col-4">
                        <div class="card mb-3">     
                            <img  class="card-img-top" alt="asd">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo BASE_URL;?>
/productos/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-secondary">Mas</a>
                                <a href="<?php echo BASE_URL;?>
/editarProd" class="btn btn-secondary">Editar</a>
                                <a href="<?php echo BASE_URL;?>
/eliminarProd" class="btn btn-secondary">Eliminar</a>
                            </div>
                        </div>
                    </div>           
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
