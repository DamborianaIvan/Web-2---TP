{include file="header.tpl"}
<div class="container mt-5 border border-dark">
    <h1 class="text-center mt-5">Productos</h1>
    <div class="container text-center">
    <form method="GET">
        <select name="idCat" id="prodSelect">
            <option value="0">Todos</option> 
            {foreach from=$Categorias item=$Categoria}
                <option value={$Categoria.id_cat}>{$Categoria.nombre_cat}</option> 
            {/foreach}
        </select>
        <button type="submit" id="btnAplicarFiltro">Aplicar</button>
    </form>
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