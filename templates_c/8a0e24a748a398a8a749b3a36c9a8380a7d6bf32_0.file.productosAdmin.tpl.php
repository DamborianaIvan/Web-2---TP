<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 18:59:11
  from 'C:\xamppp\htdocs\Web-2---TP\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac266f4d9288_79807340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a0e24a748a398a8a749b3a36c9a8380a7d6bf32' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Web-2---TP\\templates\\productosAdmin.tpl',
      1 => 1605101078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fac266f4d9288_79807340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5 border border-dark bg-info">
    <h1 class="text-center mt-5">Productos ADMIN</h1>
    <div class="container text-center">
        <div>
            <h3 class="mt-5">Categorias</h3>
            <a href="<?php echo BASE_URL;?>
/editarcategorias" class="btn btn-primary  mt-5">Editar Categoria</a>
        </div>    
        <div class="container">
            <ul class=" d-flex justify-content-between border border-dark rounded p-2 text-uppercase text-center lista-nav">
                <li><a href="<?php echo BASE_URL;?>
/productos">Todos</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'Categoria');
$_smarty_tpl->tpl_vars['Categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Categoria']->value) {
$_smarty_tpl->tpl_vars['Categoria']->do_else = false;
?>
                    <li>
                        <a href="<?php echo BASE_URL;?>
/productosbycategoria/<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['nombre_cat'];?>
</a>
                        <a href="<?php echo BASE_URL;?>
/eliminarcategoria/<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_cat'];?>
" class="bg-danger rounded p-1 w-25 text-center">X</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <a href="<?php echo BASE_URL;?>
/agregarprod" class="btn btn-primary mr-3 ml-3">Agregar Producto</a>
            <a href="<?php echo BASE_URL;?>
/agregarcategoria" class="btn btn-primary">Agregar Categoria</a>
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
                        <div class="card mb-3 text-center border border-dark ">
                            <img  class="card-img-top" alt="Imagen-<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
">         
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio_prod'];?>
</p>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo BASE_URL;?>
/productos/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-secondary">Mas</a>
                                <a href="<?php echo BASE_URL;?>
/editar/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-secondary">Editar</a>
                                <a href="<?php echo BASE_URL;?>
/eliminarProd/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-secondary">Eliminar</a>
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
