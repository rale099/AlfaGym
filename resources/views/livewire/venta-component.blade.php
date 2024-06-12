<div>
  <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
    </div>
    
    <div class="px-3 py-4 flex justify-center">
    @if($ventas->count())
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id</th>
                    <th class="text-left p-3 px-5">Fecha</th>
                    <th class="text-left p-3 px-5">Valor Total</th>
                    <th></th>
                </tr>
                @foreach ($ventas as $venta)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$venta->id}}</td>
                    <td class="p-3 px-5">{{$venta->fecha}}</td>
                    <td class="p-3 px-5">{{$venta->valor_total}}</td>
                    <td class="p-3 px-5 flex justify-end">
                      <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                      wire:click="verDetalles()">  
                        Ver detalle
                      </button>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
      <div class="card-body">
        <strong>No hay registros de ventas</strong>
      </div>
    @endif

    @if($abrirDetalles)
        @include('livewire.modal-detalle-ventas')
    @endif
</div>
</div>

