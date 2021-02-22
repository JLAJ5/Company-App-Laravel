<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro Empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('empresas.store') }}" method="POST">

                        @csrf
                        <div>
                            <x-label for="validationTooltip01" :value="__('Empresa')" />

                            <x-input id="validationServer01" class="block mt-1 w-full form-control is-valid mixed-mask" type="text" name="nomeFantasia" placeholder="Ex.: Nome da empresa" required autofocus />
                        </div>                        
                        <div class="mt-3">
                            <x-label for="validationTooltip02" :value="__('CNPJ')" />

                            <x-input id="validationServer02" class="block mt-1 w-full form-control is-valid cnpj-mask" type="text" name="cnpj" placeholder="Ex.: 00.000.000/0000-00" required autofocus />
                        </div>
                        <div class="col-md-5 mt-3">
                            <x-label for="validationServer04" :value="__('Estado')" />                            
                            <select class="form-select block mt-1 form-control is-valid rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="uf" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                <option value="" selected disabled>...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <br>
                        <div class="flex items-center justify-between">

                            <a class="underline text-sm text-red-600 hover:text-red-900" href="{{ route('empresas.index') }}">
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