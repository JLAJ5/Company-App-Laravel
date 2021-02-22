<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Empresas') }}
            </h2>
            <x-button-green>
                <a href="{{ route('empresas.create') }}">Novo</a>
            </x-button-green>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-max mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>
                        <table class="table-striped text-left">
                            <thead>
                                <tr>
                                    <th class="w-2/5">NOME:</th>
                                    <th class="w-1/6">UF:</th>
                                    <th class="w-2/5">CNPJ:</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="pt-4 pb-1 border-t border-gray-200">
                                @foreach ($empresas as $empresa)
                                <tr class="pt-4 pb-1 border-t border-gray-200">
                                    <td class="w-2/5">{{ $empresa->nomeFantasia }}</td>
                                    <td class="w-1/6">{{ $empresa->uf }}</td>
                                    <td class="w-2/5">{{ $empresa->cnpj }}</td>
                                    <td>
                                        <a class="underline text-sm text-red-600 hover:text-red-900" href="{{ route('empresas.show', ['empresa' => $empresa->id]) }}">
                                            {{ __('Visualizar') }}
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>