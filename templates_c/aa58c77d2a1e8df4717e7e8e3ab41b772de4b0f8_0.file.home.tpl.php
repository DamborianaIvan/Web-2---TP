<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 15:22:18
  from 'D:\xampp\htdocs\Web-2---TP\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f884d0ad6ad66_32928717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa58c77d2a1e8df4717e7e8e3ab41b772de4b0f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web-2---TP\\templates\\home.tpl',
      1 => 1602767834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f884d0ad6ad66_32928717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>>

<div class="container-fluid banner d-flex justify-content-center align-items-center text-white mt-5 ">
    <div class="d-flex flex-column align-items-center">
        <h2>Venta de ropa</h2>
        <p>Ropa de niños y niñas</p>
    </div>
</div>
    <div class="container justify-content-center text-center mt-4">
        <h2>PRODUCTOS EN OFERTA</h2>
        <div class="row mt-5 justify-content-center justify-content-around">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['Producto']->value['estado_prod'] === "Oferta") {?>
                    <div class="col-3">
                        <div class="card mb-3">     
                            <img src="img/" class="" alt=<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio_prod'];?>
</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo BASE_URL;?>
/productos/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" class="btn btn-primary">Mostrar mas</a>
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
