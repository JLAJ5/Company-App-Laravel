<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edita Cadastro Fornecedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('fornecedors.update', ['fornecedor' => $fornecedor->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div>
                            <x-label for="validationTooltip01" :value="__('Nome Fornecedor')" />
                            <x-input id="validationServer01" class="block mt-1 w-full form-control is-valid mixed-mask" type="text" name="nome" :value="$fornecedor->nome" required autofocus />
                        </div>
                        <div class="mt-3">
                            <x-label for="validationTooltip02" :value="__('CPF')" />
                            <x-input id="validationServer02" class="block mt-1 w-full form-control is-valid cpf-mask" type="text" name="cpf" :value="$fornecedor->cpf" required autofocus />
                        </div>
                        div>
                        <x-label for="validationTooltip03" :value="__('RG')" />
                        <x-input id="validationServer03" class="block mt-1 w-full form-control is-valid rg-mask" type="text" name="rg" :value="$fornecedor->rg" required autofocus />
                </div>
                <div class="mt-3">
                    <x-label for="validationTooltip04" :value="__('Telefone')" />
                    <x-input id="validationServer04" class="block mt-1 w-full form-control is-valid cpf-mask" type="text" name="telefone" :value="$fornecedor->telefone" required autofocus />
                </div>
                <div class="col-md-5 mt-3">
                    <x-label for="validationTooltip05" :value="__('Empresa')" />
                    <select class="form-select block mt-1 form-control is-valid rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="empresa" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                        <option value="$empresa_old->id" selected>{{ $empresa_old->nomeFantasia }}</option>
                        @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nomeFantasia }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="flex items-center justify-between">

                    <x-button-blue>
                        <a href="{{ route('fornecedors.index') }}">Voltar</a>
                    </x-button-blue>

                    <input type="submit" class="inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-300 active:bg-yellow-400 focus:outline-none focus:border-yellow-300 focus:ring ring-yellow-200 disabled:opacity-25 transition ease-in-out duration-150" value="Atualizar">

                </div>

                </form>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>