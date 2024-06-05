<div>
    <div class="card">
        <div class="card-header"></div>
        @if($categorias->count())
            <div class="card-boy">
                <table class="table table-striped">
                    <thead>
                        <tr>    
                            <td>ID</td> 
                            <td>Nombre</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $cate)
                        <tr>
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->nombre}}</td>
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
                <strong>No hay registros de Categoria</strong>
            </div>
        @endif
    </div>
</div>

