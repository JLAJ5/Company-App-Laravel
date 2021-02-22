<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('fornecedors.store') }}" method="POST">

                        @csrf
                        <div>
                            <x-label for="validationTooltip01" :value="__('Nome')" />

                            <x-input id="validationServer01" class="block mt-1 w-full form-control is-valid mixed-mask" type="text" name="nome" placeholder="Ex.: Nome do fornecedor" required autofocus />
                        </div>                        
                        <div class="mt-3">
                            <x-label for="validationTooltip02" :value="__('CPF')" />

                            <x-input id="validationServer02" class="block mt-1 w-full form-control is-valid cpf-mask" type="text" name="cpf" placeholder="Ex.: 000.000.000-00" required autofocus />
                        </div>
                        <div>
                            <x-label for="validationTooltip03" :value="__('RG')" />

                            <x-input id="validationServer03" class="block mt-1 w-full form-control is-valid rg-mask" type="text" name="rg" placeholder="Ex.: 00.000.000-UF" required autofocus />
                        </div>                        
                        <div class="mt-3">
                            <x-label for="validationTooltip04" :value="__('Telefone')" />

                            <x-input id="validationServer04" class="block mt-1 w-full form-control is-valid phone-ddd-mask" type="text" name="telefone" placeholder="Ex.: (00) 0000-0000" required autofocus />
                        </div>
                        <div class="col-md-5 mt-3">
                            <x-label for="validationServer04" :value="__('Empresa')" />                            
                            <select class="form-select block mt-1 form-control is-valid rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="empresa" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                <option value="" selected disabled>...</option>
            @foreach ($empresas as $empresa)            
                <option value="{{ $empresa->id }}">{{ $empresa->nomeFantasia }}</option>        
            @endforeach  
                            </select>
                        </div>
                        <br>
                        <div class="flex items-center justify-between">

                            <a class="underline text-sm text-red-600 hover:text-red-900" href="{{ route('fornecedors.index') }}">
                                {{ __('Cancelar') }}
                            </a>

                            <input type="submit" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150" value="Cadastrar">

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>