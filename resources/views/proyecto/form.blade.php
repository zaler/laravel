<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @isset ($method)
                            @method($method)
                        @endif
                        <div class="mb-4">
                            <label for="nombre_proyecto" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nombre Proyecto') }}</label>
                            <input type="text" name="nombre_proyecto" id="nombre_proyecto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nombre_proyecto', $proyecto->nombre_proyecto) }}">
                            @error('nombre_proyecto')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="fuente_fondos" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Fuente Fondos') }}</label>
                            <input type="text" name="fuente_fondos" id="fuente_fondos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('fuente_fondos', $proyecto->fuente_fondos) }}">
                            @error('fuente_fondos')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_planificado" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Monto Planificado') }}</label>
                            <input type="text" name="monto_planificado" id="monto_planificado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('monto_planificado', $proyecto->monto_planificado) }}">
                            @error('monto_planificado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_patrocinado" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Monto Patrocinado') }}</label>
                            <input type="text" name="monto_patrocinado" id="monto_patrocinado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('monto_patrocinado', $proyecto->monto_patrocinado) }}">
                            @error('monto_patrocinado')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="monto_fondos_propios" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Monto Fondos Propios') }}</label>
                            <input type="text" name="monto_fondos_propios" id="monto_fondos_propios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('monto_fondos_propios', $proyecto->monto_fondos_propios) }}">
                            @error('monto_fondos_propios')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('proyecto.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancelar') }}</a>
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded ml-2">{{ $buttonText }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>