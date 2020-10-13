<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 16:38:43
  from 'C:\xamppp\htdocs\TPWEB2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f85bbf3babbe8_27147261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793415bbb543fc53d5c0d3cc3ced34f9a3f09339' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\TPWEB2\\templates\\productos.tpl',
      1 => 1602599919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f85bbf3babbe8_27147261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5 border border-dark">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
    <form method="GET">
        <select name="idCat" id="prodSelect">
            <option value="0">Todos</option> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'Categoria');
$_smarty_tpl->tpl_vars['Categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Categoria']->value) {
$_smarty_tpl->tpl_vars['Categoria']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_cat'];?>
><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['nombre_cat'];?>
</option> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" id="btnAplicarFiltro">Aplicar</button>
    </form>
    </div>
    <div class="row justify-content-around mt-4">      
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'Producto');
$_smarty_tpl->tpl_vars['Producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Producto']->value) {
$_smarty_tpl->tpl_vars['Producto']->do_else = false;
?>        
               
                    <div class="col-3">
                        <div class="card mb-3">     
                            <img  class="card-img-top" alt="asd">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre_prod'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion_prod'];?>
</p>
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
