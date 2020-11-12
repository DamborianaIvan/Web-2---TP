{include file="header.tpl"}>

<div class="container-fluid banner d-flex justify-content-center align-items-center text-white mt-5 ">
    <div class="d-flex flex-column align-items-center">
        <h2>Venta de ropa</h2>
        <p>Ropa de niños y niñas</p>
    </div>
</div>
    <div class="container-fluid justify-content-center text-center mt-4 border border-dark bg-info">
        <h2>PRODUCTOS EN OFERTA</h2>
        <div class="row mt-5 justify-content-center justify-content-around">
            {foreach from=$Productos item=$Producto}
                {if $Producto.estado_prod=== "Oferta"}
                    <div class="col-3 ">
                        <div class="card mb-3 border border-dark bg-warning">     
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">{$Producto.nombre_prod}</h5>
                                <p class="card-text">{$Producto.descripcion_prod}</p>
                                <p class="card-text">${$Producto.precio_prod}</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{BASE_URL}/productos/{$Producto.id_producto}" class="btn btn-primary text-uppercase p-1">Mostrar mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>

{include file="footer.tpl"}