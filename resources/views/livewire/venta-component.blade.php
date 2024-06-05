<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($ventas->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Fecha de la Venta</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventas as $venta)
                            <tr>
                                <td>{{$venta->id}}</td>
                                <td>{{$venta->fecha}}</td>
                                <td>{{$venta->valor_total}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Ventas</strong>
                </div>
            @endif
        </div>
    </div>
</div>

