<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($usuarios->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Nombre</td>
                                <td>Correo</td>
                                <td>Código</td>
                                <td>Mebresia</td>
                                <td>Sucursal</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->codigo}}</td>
                                <td>{{$usuario->membresias->producto_servicios->nombre}}</td>
                                <td>{{$usuario->sucursal_id}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros de Tipo</strong>
                </div>
            @endif
        </div>
    </div>
</div>

