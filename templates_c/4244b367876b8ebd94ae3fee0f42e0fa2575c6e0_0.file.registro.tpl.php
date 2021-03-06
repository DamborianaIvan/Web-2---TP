<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 19:23:32
  from 'C:\xamppp\htdocs\Web-2---TP\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac2c24a1a499_25112916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4244b367876b8ebd94ae3fee0f42e0fa2575c6e0' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\Web-2---TP\\templates\\registro.tpl',
      1 => 1605119010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fac2c24a1a499_25112916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-5  container">
<form method="post" action="crearUsuario">
    <div class="row border-bottom">
        <div class="col-md-6">
            <h3 class="text-center mt-4 h3contact">
                Crea una cuenta
            </h3>
        </div>
        <div class="col-md-6">
            <span class="pencil"><i class="fas fa-pencil-alt"></i></span>
        </div>
        <br>
    </div>
    <div class="row mt-3">
        <label for="" class="label col-md-3 control-label">Nombre</label>
        <div class="col-md-9">
            <input type="text" class="form-control form-input-nombre" name="newUserName"
                placeholder="Nombre">
        </div>
    </div>
    <div class="row mt-3">
        <label for="" class="label col-md-3 control-label">E-mail</label>
        <div class="col-md-9">
            <input type="email" class="form-control form-input-correo" name="newUserEmail"
                placeholder="E-mail" required>
        </div>
    </div>
    <div class="row mt-3">
        <label for="" class="label col-md-3 control-label">Contraseña</label>
        <div class="col-md-9">
            <input type="password" name="newUserPass" class="form-control form-input-mensaje"
                placeholder="Ingrese su contraseña.">
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <p><?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>
</p>
    </div>
   
    <div class="row d-flex justify-content-center m-4">
        <div class="col-xs-4">
            <input type="submit" id="btn-enviar" class="btn btn-outline-danger ml-4"
                value="Registrarse">
        </div>
    </div>
</form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
