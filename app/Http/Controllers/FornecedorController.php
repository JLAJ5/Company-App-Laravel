<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use App\Models\Empresa;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedors = Fornecedor::all();        
        
        return view('listAllFornecedors', ['fornecedors' => $fornecedors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('newFornecedor', ['empresas' => $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->cpf = $request->cpf;
        $fornecedor->rg = $request->rg;
        $fornecedor->telefone = $request->telefone;       
        $fornecedor->empresa = $request->empresa;
        $fornecedor->save();

        return redirect()->route('fornecedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        return view('listFornecedor', ['fornecedor' => $fornecedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor, Empresa $empresa)
    {
        $empresas = Empresa::all();
        $empresa_old = $fornecedor->empresa()->first();
        return view('editFornecedor', ['fornecedor' => $fornecedor, 'empresa_old' => $empresa_old, 'empresas' => $empresas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        $fornecedor->nome = $request->nome;
        $fornecedor->cpf = $request->cpf;
        $fornecedor->rg = $request->rg;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->empresa = $request->empresa;
        $fornecedor->save();

        return redirect()->route('fornecedors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()->route('fornecedors.index');
    }
}
