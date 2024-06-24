@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="mx-auto right-0 mt-2 " >
        <div class="bg-white rounded overflow-hidden shadow-lg" >
            <div class="text-center p-6 bg-gray-800 border-b">
                (<svg aria-hidden="true" role="img" class="h-24 w-24 text-white rounded-full mx-auto" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="currentColor" d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44Zm60 8A104 104 0 1 1 128 24a104.2 104.2 0 0 1 104 104Zm-16 0a88 88 0 1 0-153.8 58.4a81.3 81.3 0 0 1 24.5-23a59.7 59.7 0 0 0 82.6 0a81.3 81.3 0 0 1 24.5 23A87.6 87.6 0 0 0 216 128Z"></path></svg>
                <p class="pt-2 text-lg font-semibold text-gray-50">
                    {{Auth::user()->name}}
                </p>
                <p class="text-sm text-gray-100">
                    {{Auth::user()->email}}
                </p>
            </div>
            
            <div>
                <table class="text-left w-full">
                    <thead class="bg-black flex text-white w-full">
                        <tr class="flex w-full mb-4">
                            <th class="p-4 w-1/4"></th>
                            <th class="p-4 w-1/4">Membresía activa</th>
                            <th class="p-4 w-1/4">Sucursal</th>
                            <th class="p-4 w-1/4"></th>
                        </tr>
                    </thead>
                    
                    <tbody class="bg-grey-light flex flex-col items-center justify-between  w-full">
                        <tr class="flex w-full mb-4">
                        <td class="p-4 w-1/4"></td>
                            <td class="p-4 w-1/4">{{$membresia->nombre}}</td>
                            <td class="p-4 w-1/4">{{$sucursal->nombre}}</td>
                        <td class="p-4 w-1/4"></td>
                        </tr>
            </div>
        </div>
    </div>
</div>


@endsection
