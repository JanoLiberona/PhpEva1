<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Agregar Producto
        </h2>
    </x-slot>

    {!! Form::open(['route' => 'productos.store']) !!}

    <x-jet-validation-errors class="mb-4"/>


    {{Form::label('codigoProducto', 'Código de Producto');}}
    {{Form::text('codigoProducto');}}<br><br>
    {{Form::label('nombreProducto', 'Nombre de Producto')}}
    {{Form::text('nombreProducto')}}<br><br>
    {{Form::label('categoria', 'Categoría');}}
    {{Form::text('categoria');}}<br><br>
    {{Form::label('sucursal', 'Sucursal');}}
    {{Form::select('size', ['1' => 'Alpha', '2' => 'Beta', '3' => 'Gama'], null, ['placeholder' => 'Selecciona una sucursal']);}}<br><br>
    {{Form::label('descripcion', 'Descripción');}}
    {{Form::text('descripcion');}}<br><br>
    {{Form::label('cantidad', 'Cantidad');}}
    {{Form::number('cantidad', '0');}}<br><br>
    {{Form::label('precioVenta', 'Precio Venta');}}
    {{Form::text('precioVenta');}}<br><br>
    {{Form::submit('Agregar Producto')}}

    {!! Form::close() !!}



</x-app-layout>