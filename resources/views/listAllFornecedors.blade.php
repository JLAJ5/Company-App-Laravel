<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Fornecedores') }}
            </h2>
            <x-button-green>
                <a href="{{ route('fornecedors.create') }}">Novo</a>
            </x-button-green>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-max mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($fornecedors->count() > 0)
                    <div>
                        <table class="table-striped text-left">
                            <thead>
                                <tr>
                                    <th class="w-1/5">NOME:</th>
                                    <th class="w-1/5">CPF:</th>
                                    <th class="w-1/6">RG:</th>
                                    <th class="w-1/5">TELEFONE:</th>
                                    <th class="w-1/5">EMPRESA:</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="pt-4 pb-1 border-t border-gray-200">
                                @foreach ($fornecedors as $fornecedor)
                                <tr class="pt-4 pb-1 border-t border-gray-200">
                                    <?php
                                    $empresa = $fornecedor->empresa()->first();
                                    ?>
                                    <td class="w-1/5">{{ $fornecedor->nome }}</td>
                                    <td class="w-1/5">{{ $fornecedor->cpf }}</td>
                                    <td class="w-1/6">{{ $fornecedor->rg }}</td>
                                    <td class="w-1/5">{{ $fornecedor->telefone }}</td>
                                    <td class="w-1/5">{{ $empresa->nomeFantasia }}</td>
                                    <td>
                                        <x-a-info href="{{ route('fornecedors.show', ['fornecedor' => $fornecedor->id]) }}">
                                            {{ __('Visualizar') }}
                                        </x-a-info>                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    Não há fornecedores cadastrados!!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>