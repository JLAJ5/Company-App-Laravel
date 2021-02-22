<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edita Cadastro Empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>

                        <div class="ml-3">
                            <div class="font-medium text-base text-gray-800">{{ $empresa->nomeFantasia }}</div>
                            <div class="font-medium text-sm text-gray-500">CNPJ: {{ $empresa->cnpj }}</div>
                            <div class="font-medium text-sm text-gray-500">UF: {{ $empresa->uf }}</div>
                            <div class="font-medium text-sm text-gray-500">Criado em: {{ date('d/m/y H:i', strtotime($empresa->created_at)) }}</div>
                        </div>
                    </div>

                    <div class="py-1 border-t border-gray-200">
                        <div class="py-1 px-5 flex items-center justify-between">
                        
                            <x-a-blue href="{{ route('empresas.index') }}" >
                                {{ __('Voltar') }}
                            </x-a-blue>

                            <x-a-gray href="{{ route('empresas.edit', ['empresa' => $empresa->id]) }}" >
                                {{ __('Editar') }}
                            </x-a-gray>

                            <form method="POST" action="{{ route('empresas.destroy', ['empresa' => $empresa->id]) }}">

                                @method('DELETE')
                                @csrf

                                <x-input-red value="Remover" />

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>