<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Productos
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
                <a href="{{route('productos.create')}}">Agregar</a>
            </div>
        </div>
    </x-slot>



    <div>

    {!! Form::open(['route' => 'productos.index', 'method' => 'GET']) !!}
    <br>{{Form::label('codigoProducto', 'Código de Producto');}}
    {{Form::text('codigoProducto', $request->input('codigoProducto'));}}
    {{Form::label('nombreProducto', 'Nombre de Producto')}}
    {{Form::text('nombreProducto', $request->input('nombreProducto'));}}
    {{Form::label('sucursal', 'Sucursal');}}
    {{Form::select('sucursal', ['1' => 'Alpha', '2' => 'Beta', '3' => 'Gama'], null, ['placeholder' => 'Selecciona una sucursal'])}}
    {{Form::submit('Consultar')}}<br><br>
    {!! Form::close() !!}

    </div>


    <!-- component -->
    <div class="overflow-x-auto">
        <table class="min-w-max w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Código Producto</th>
                    <th class="py-3 px-6 text-left">Nombre Producto</th>
                    <th class="py-3 px-6 text-center">Categoría</th>
                    <th class="py-3 px-6 text-center">Sucursal</th>
                    <th class="py-3 px-6 text-center">Descripción</th>
                    <th class="py-3 px-6 text-center">Cantidad</th>
                    <th class="py-3 px-6 text-center">Precio</th>
                    <th class="py-3 px-6 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">123</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span>Iphone 6</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span>Celular</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>Alpha</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>Celular Iphone 6 plus reacondicionado</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>5</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>$500.000</span>
                    </td>
                    <!-- botones modidicar -->
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">456</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span>Iphone 7</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span>Celular</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>Beta</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>Celular Iphone 7 Nuevo</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>2</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>$600.000</span>
                    </td>
                    <!-- botones modidicar -->
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</x-app-layout>