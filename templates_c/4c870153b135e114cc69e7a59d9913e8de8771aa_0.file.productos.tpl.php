<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 13:14:53
  from 'C:\xampp\htdocs\Web-2---TP\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbcf93d8cbfc3_57630558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c870153b135e114cc69e7a59d9913e8de8771aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2---TP\\templates\\productos.tpl',
      1 => 1606219409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbcf93d8cbfc3_57630558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid mt-5 border border-dark bg-dark text-white">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
        <h3 class="mt-5">Categorias</h3>
        <div class="container ">
            <ul class=" d-flex justify-content-between border border-danger rounded p-2 list-unstyled text-uppercase text-center text-white lista-nav">
                <li class="list-group text-ligth "><a class="text-warning" href="<?php echo BASE_URL;?>
/productos">Todos</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'Categoria');
$_smarty_tpl->tpl_vars['Categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Categoria']->value) {
$_smarty_tpl->tpl_vars['Categoria']->do_else = false;
?>
                    <li><a class="text-white " href="<?php echo BASE_URL;?>
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
                        <div class="card bg-light mb-3 text-center border border-danger ">     
                            <img  class="card-img-top" alt="Imagen-<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
">
                            <div class="card-body text-white bg-secondary ">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio_prod'];?>
</p>
                            </div>
                            <div class="btn" role="group" aria-label="Basic example">
                                <a href="<?php echo BASE_URL;?>
/productos/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-primary">Mostrar mas</a>
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
