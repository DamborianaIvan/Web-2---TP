
{include file="header.tpl"}

<article class="mt-5">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4 justify-content-center">
                    <form method="post" action="verificarLogin">
                        <div class="row mt-3 justify-content-center">
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
                            <p>{$Mensaje}</p>
                            <div >
                                <a href="registrar" class="text-center">No tienes cuenta ? Registrate</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-xs-4">
                                <input type="submit" id="btn-enviar" class="btn btn-outline-danger ml-4"
                                    value="Iniciar Sesion">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </article>




{include file="footer.tpl"}