<div>
<div>
    <div class="card">
        <div class="card-header"></div>
        @if($productos->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Producto</td>
                            <td>Stock</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->inventarios == null ? '' : $producto->inventarios->stock}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros de Inventario</strong>
            </div>
        @endif
    </div>
</div>

</div>
