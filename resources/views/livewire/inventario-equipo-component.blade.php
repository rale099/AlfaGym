<div>
    <div class="card">
        <div class="card-header"></div>
        @if($inveEquipos->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>Id</td> 
                            <td>Nombre</td>
                            <td>Peso en Lbs</td>
                            <td>Cantidad</td>
                            <td>Tipo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inveEquipos as $invEqui)
                        <tr>
                            <td>{{$invEqui->id}}</td>
                            <td>{{$invEqui->nombre}}</td>
                            <td>{{$invEqui->peso}} Lbs</td>
                            <td>{{round($invEqui->cantidad)}}</td>
                            <td>{{$invEqui->equipo->tipo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros en el Inventario de Equipos</strong>
            </div>
        @endif
    </div>
</div>

