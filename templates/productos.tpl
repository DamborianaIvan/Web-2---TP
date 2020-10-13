{include file="header.tpl"}
<div class="container-fluid mt-5 border border-dark">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
    <h3 class="mt-5">Categorias</h3>
    <ul class="d-flex justify-content-between lista-cat">
        <li><a href="">Todos</a></li>
        {foreach from=$Categorias item=$Categoria}
            <li><a href="mostrarProds/{$Categoria.id_cat}">{$Categoria.nombre_cat}</a></li>
        {/foreach}
    </ul>
    </div>
    <div class="row justify-content-around mt-4">      
            {foreach from=$Productos item=$Producto}        
               
                    <div class="col-3">
                        <div class="card mb-3">     
                            <img  class="card-img-top" alt="asd">
                            <div class="card-body">
                                <h5 class="card-title">{$Producto.nombre_prod}</h5>
                                <p class="card-text">{$Producto.descripcion_prod}</p>
                            </div>
                        </div>
                    </div>      
               
            {/foreach}       
    </div>
</div>
{include file="footer.tpl"}