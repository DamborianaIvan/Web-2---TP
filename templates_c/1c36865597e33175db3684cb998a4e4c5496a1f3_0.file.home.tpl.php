<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 18:01:53
  from 'C:\xamppp\htdocs\TPWEB2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8720f13f06d1_73001232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c36865597e33175db3684cb998a4e4c5496a1f3' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\TPWEB2\\templates\\home.tpl',
      1 => 1602691310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8720f13f06d1_73001232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>>

<div class="container-fluid banner d-flex justify-content-center align-items-center text-white ">
    <div class="d-flex flex-column align-items-center">
        <h2>Venta de ropa</h2>
        <p>Ropa de niños y niñas</p>
    </div>
    <div class="row justify-content-around mt-4">
        <h2>PRODUCTOS EN OFERTA</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['Producto']->value['estado_prod'] == "Oferta") {?>
                <div class="col-3">
                    <div class="card mb-3">     
                        <img src="img/" class="" alt=<?php echo $_smarty_tpl->tpl_vars['']->value;?>
>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
