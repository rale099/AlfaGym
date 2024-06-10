<div>
    <div class="card">
        <div class="card-header"></div>
        @if($detalleVentas->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>Id</td> 
                            <td>En que venta se asigna</td>
                            <td>Producto o servicio vendido</td>
                            <td>Cantidad</td>
                            <td>Precio Unitario</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalleVentas as $deVe)
                        <tr>
                            <td>{{$deVe->id}}</td>
                            <td>{{$deVe->venta_id}}</td>
                            <td>{{$deVe->producto_servicios->nombre}}</td>
                            <td>{{round($deVe->cantidad)}}</td>
                            <td>{{$deVe->precio_unitario}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros de Detalles de Venta</strong>
            </div>
        @endif
    </div>
</div>

