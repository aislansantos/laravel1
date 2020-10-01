<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $user = $request->user();
        $nome = $user->name;


        

        $idade = 15;
        $cidade = $request->input('cidade');

        $lista = [
            ['nome'=>'farinha', 'qt'=>'2'],
            ['nome'=>'ovo', 'qt'=>'4'],
            ['nome'=>'fermento', 'qt'=>'1'],
            ['nome'=>'açucar', 'qt'=>'2']
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $lista,

            'showform' => Gate::allows('see-form')

        ];

        return view('admin.config', $data);
    }

    public function info()
    {
        echo "Configurações INFO 3";
    }

    public function permissoes()
    {
        echo "Configurações PERMISSÕES 3";
    }
}
