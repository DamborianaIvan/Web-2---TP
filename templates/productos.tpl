{include file="header.tpl"}
<div class="container-fluid mt-5 border border-dark bg-dark text-white">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
        <h3 class="mt-5">Categorias</h3>
        <div class="container ">
            <ul class=" d-flex justify-content-between border border-danger rounded p-2 list-unstyled text-uppercase text-center text-white lista-nav">
                <li class="list-group text-ligth "><a class="text-warning" href="{BASE_URL}/productos">Todos</a></li>
                {foreach from=$Categorias item=$Categoria}
                    <li><a class="text-white " href="{BASE_URL}/productosbycategoria/{$Categoria.id_cat}">{$Categoria.nombre_cat}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="row justify-content-around mt-4">      
            {foreach from=$Productos item=$Producto}                   
                    <div class="col-4">
                        <div class="card bg-light mb-3 text-center border border-danger ">     
                            <img  class="card-img-top" alt="Imagen-{$Producto.nombre_prod}">
                            <div class="card-body text-white bg-secondary ">
                                <h5 class="card-title">{$Producto.nombre_prod}</h5>
                                <p class="card-text">{$Producto.descripcion_prod}</p>
                                <p class="card-text">${$Producto.precio_prod}</p>
                            </div>
                            <div class="btn" role="group" aria-label="Basic example">
                                <a href="{BASE_URL}/productos/{$Producto.id_producto}" class="btn btn-primary">Mostrar mas</a>
                            </div>
                        </div>
                    </div>      
            {/foreach}       
    </div>
</div>
{include file="footer.tpl"}