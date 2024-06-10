<div>
    <div class="card">
        <div class="card-header"></div>
        @if($equipos->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>Id</td> 
                            <td>Tipo</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                        <tr>
                            <td>{{$equipo->id}}</td>
                            <td>{{$equipo->tipo}}</td>
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
                <strong>No hay registros de Equipos</strong>
            </div>
        @endif
    </div>
</div>

