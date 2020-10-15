{include file="header.tpl"}
<div class="row justify-content-around mt-4">            
    <div class="col-4">
        <div class="card mb-3">     
            <img  class="card-img-top" alt="asd">
            <div class="card-body">
                <h5 class="card-title">{$Producto[0].nombre_prod}</h5>
                <p class="card-text">{$Producto[0].descripcion_prod}</p>
                <p class="card-text">${$Producto[0].precio_prod}</p>
            </div>
        </div>
    </div>              
</div>

{include file="footer.tpl"}