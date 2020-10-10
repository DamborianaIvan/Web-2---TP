{include file="header.tpl"}
<div class="container mt-5 border border-dark">
    <h1 class="text-center mt-5">Productos Destacados</h1>
    <div class="row justify-content-around mt-4">
        {foreach from=$Productos item=$Producto}
            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/banner.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$Producto.nombre_prod}</h5>
                        <p class="card-text">{$Producto.descripcion_prod}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>
{include file="footer.tpl"}