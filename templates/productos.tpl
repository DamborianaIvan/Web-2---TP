{include file="header.tpl"}
<div class="container-fluid mb-5 p-5 mt-5 border border-dark contenedor-prod">
    <h1 class="text-center mt-5 text-white">Productos</h1>
    <div class="container text-center">
        <select class="browser-default custom-select w-25" name="select">
            {foreach from=$Categorias item=$Categoria}
                <option value={$Categoria.nombre_cat}>{$Categoria.nombre_cat}</option> 
            {/foreach}
        </select>
    </div>
    <div class="row justify-content-around mt-4">
        {foreach from=$Productos item=$Producto}
            <div class="col-3">
                <div class="card mb-3 text-center">     
                    <img src="img/remera_adidas_negra.jpg" class="card-img-top" alt="remera adidas">
                    <div class="card-body">
                        <h5 class="card-title">{$Producto.nombre_prod}</h5>
                        <p class="card-text">{$Producto.descripcion_prod}</p>
                        <p class="card-text">${$Producto.precio_prod}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>
{include file="footer.tpl"}