<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 18:17:38
  from 'C:\xamppp\htdocs\Web-2---TP\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f887622310b54_08196266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4eca3c19e9f775c6125f468c10f167133d5dc82' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Web-2---TP\\templates\\login.tpl',
      1 => 1602778561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f887622310b54_08196266 (Smarty_Internal_Template $_smarty_tpl) {
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
