<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 13:12:03
  from 'C:\xampp\htdocs\Web-2---TP\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbcf893ab4bd6_56722919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae7dbdba38785abe197ba2a48110226a1350fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2---TP\\templates\\login.tpl',
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
function content_5fbcf893ab4bd6_56722919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<article class="mt-5">
            <div class="row mt-5 justify-content-center border border-info ">
                <div class="col-md-4 justify-content-center">
                    <form method="post" action="verificarLogin">
                        <div class="row mt-3 justify-content-center mt-5">
                            <h4 class="text-center mb-5">Ingrese su nombre de usuario y contraseña</h4>
                            <label for="" class="label col-md-3 control-label">Nombre</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-input-nombre" name="usuarioId"
                                    placeholder="Nombre">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <label for="" class="label col-md-3 control-label">Contraseña</label>
                            <div class="col-md-9">
                                <input type="password" name="passwordId" class="form-control form-input-mensaje"
                                    placeholder="Ingrese su contraseña">
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <p><?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>
</p>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <a class="text-center" href="<?php echo BASE_URL;?>
/registro">No tienes cuenta? Registrate</a>
                        </div>
                        <div class="row d-flex justify-content-center mt-5 mb-5">
                            <div class="col-xs-4">
                                <input type="submit" id="btn-enviar" class="btn btn-outline-primary ml-4"
                                    value="Iniciar Sesion">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</article>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
