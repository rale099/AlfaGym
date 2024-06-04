<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($sucursales->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Nombre</td>
                                <td>Dirección</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sucursales as $sucursal)
                            <tr>
                                <td>{{$sucursal->id}}</td>
                                <td>{{$sucursal->nombre}}</td>
                                <td>{{$sucursal->direccion}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Sucursales</strong>
                </div>
            @endif
        </div>
    </div>
</div>

