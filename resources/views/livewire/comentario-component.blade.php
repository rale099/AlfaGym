<div>
    <div class="card">
        <div class="card-header"></div>
        @if($comentarios->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Comentarios</td>
                            <td>Publicado el: </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comentarios as $comen)
                        <tr>
                            <td>{{$comen->id}}</td>
                            <td>{{$comen->comentario}}</td>
                            <td>{{$comen->fecha_comentario}}</td>
                            <td>{{$comen->usuario_id}}</td>
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
                <strong>No hay Comentarios publicados</strong>
            </div>
        @endif
    </div>
</div>

