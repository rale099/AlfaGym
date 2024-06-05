<div>
    <div>
        <div class="card">
            <div class="card-header"></div>
            @if($tipos->count())
                <div class="card-boy">
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <td>ID</td> 
                                <td>Nombre</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{$tipo->id}}</td>
                                <td>{{$tipo->nombre}}</td>
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

