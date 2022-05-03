<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaCRUDController extends Controller
{
    //Pagina lista de empresas
    public function index()
    {
        $data['empresas'] = Empresa::orderby('id', 'desc')->paginate(5);
        return view('empresas.index', $data);
    }

    //Pagina cadastrar empresas
    public function criar()
    {
        return view('empresas.criar');
    }

    //Funcao Salvar
    public function salvar(Request $request)
    {
        $request->validate([
            'nome'=> 'required',
            'email'=> 'required',
            'endereco'=> 'required'
        ]);

        $empresa = new Empresa;
        $empresa-> nome = $request->nome;
        $empresa-> email = $request->email;
        $empresa-> endereco = $request->endereco;
        $empresa->save();
        return redirect()->route('empresas.index')
                                -> with('sucesso', 'Empresa criada com sucesso.');
    }


    public function mostrar(Empresa $empresa)
    {
        return view('empresas.criar');
    }


    public function editar(Empresa $empresa)
    {
        return view('empresas.editar', compact('empresa'));
    }

    public function atualizar(Empresa $id, Request $request)
    {
        $request->validate
        ([
            'nome'=> 'required',
            'email'=> 'required',
            'endereco'=> 'required'
        ]);

        $empresa = new Empresa;
        $empresa->nome = $request->nome;
        $empresa->email = $request->email;
        $empresa->endereco = $request->endereco;

        $test_id = $empresa->find($id)[0];
        
        DB::update('UPDATE empresas SET nome = ?, email = ?, endereco =? where id =?',
                    [$empresa->nome, $empresa-> email, $empresa->endereco, $test_id->id]);

        return redirect() -> route('empresas.index')
                    ->with('sucesso', 'Sua empresa foi atualizada com sucesso.');
    }

    public function deletar(Empresa $empresa, $id)
    {
        DB::table('empresas')->delete($id);

        return redirect() -> route('empresas.index')
                            ->with('sucesso', 'Sua empresa foi deletada com sucesso.');
    }
}
