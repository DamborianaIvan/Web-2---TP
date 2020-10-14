{include file="header.tpl"}>

<div class="container-fluid banner d-flex justify-content-center align-items-center text-white ">
    <div class="d-flex flex-column align-items-center">
        <h2>Venta de ropa</h2>
        <p>Ropa de niños y niñas</p>
    </div>
    <div class="row justify-content-around mt-4">
        <h2>PRODUCTOS EN OFERTA</h2>
        {foreach from=$Productos item=$Producto}
            {if $Producto.estado_prod == "Oferta"}
                <div class="col-3">
                    <div class="card mb-3">     
                        <img src="img/" class="" alt={$}>
                        <div class="card-body">
                            <h5 class="card-title">{$Producto.nombre_prod}</h5>
                            <p class="card-text">{$Producto.descripcion_prod}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            {/if}
        {/foreach}
    </div>
</div>
{include file="footer.tpl"}