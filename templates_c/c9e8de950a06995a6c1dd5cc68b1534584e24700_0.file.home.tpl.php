<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 13:11:58
  from 'C:\xampp\htdocs\Web-2---TP\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbcf88e59ba59_17582048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e8de950a06995a6c1dd5cc68b1534584e24700' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2---TP\\templates\\home.tpl',
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
function content_5fbcf88e59ba59_17582048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>>

<div class="container-fluid banner d-flex justify-content-center align-items-center text-white mt-5 ">
    <div class="d-flex flex-column align-items-center">
        <h2>Venta de ropa</h2>
        <p>Ropa de niños y niñas</p>
    </div>
</div>
    <div class="container-fluid justify-content-center text-center mt-4 border border-dark bg-info">
        <h2>PRODUCTOS EN OFERTA</h2>
        <div class="row mt-5 justify-content-center justify-content-around">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['Producto']->value['estado_prod'] === "Oferta") {?>
                    <div class="col-3 ">
                        <div class="card mb-3 border border-dark bg-warning">     
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio_prod'];?>
</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo BASE_URL;?>
/productos/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-primary text-uppercase p-1">Mostrar mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
