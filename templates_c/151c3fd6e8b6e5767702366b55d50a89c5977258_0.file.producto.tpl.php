<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 00:30:11
  from 'D:\xampp\htdocs\Web-2---TP\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88cd73d9a980_12444933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151c3fd6e8b6e5767702366b55d50a89c5977258' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web-2---TP\\templates\\producto.tpl',
      1 => 1602801008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f88cd73d9a980_12444933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-around mt-4">            
    <div class="col-4">
        <div class="card mb-3">     
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value[0]['nombre_prod'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value[0]['descripcion_prod'];?>
</p>
                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['Producto']->value[0]['precio_prod'];?>
</p>
            </div>
        </div>
    </div>              
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
