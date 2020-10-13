{include file="header.tpl"}
<div class="col-md-5">
<form method="post" action="crearUsuario">
    <div class="row border-bottom">
        <div class="col-md-6">
            <h3 class="text-left mt-4 h3contact">
                Crea una cuenta:
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
            <input type="password" name="newUserPass"class="form-control form-input-mensaje"
                placeholder="Ingrese su contraseña.">
        </div>
    </div>
    
   
    <div class="row d-flex justify-content-center m-4">
        <div class="col-xs-4">
            <input type="submit" id="btn-enviar" class="btn btn-outline-danger ml-4"
                value="Registrarse">
        </div>
    </div>
</form>
</div>



{include file="footer.tpl"}