{include file="header.tpl"}
<div class="container mt-5 border border-dark bg-info">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
        <h3 class="mt-5">Categorias</h3>
        <div class="container">
            <ul class="d-flex justify-content-between lista-cat">
                <li><a href="{BASE_URL}/productos">Todos</a></li>
                {foreach from=$Categorias item=$Categoria}
                    <li><a href="{BASE_URL}/productosbycategoria/{$Categoria.id_cat}">{$Categoria.nombre_cat}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="row justify-content-around mt-4">      
            {foreach from=$Productos item=$Producto}                   
                    <div class="col-4">
                        <div class="card bg-light mb-3 text-center">     
                            
                            <div class="card-body">
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