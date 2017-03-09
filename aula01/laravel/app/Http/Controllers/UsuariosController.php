<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
      return view('usuarios',[
        'texto' => 'Lista de Usuários',
        'checagem' => true,
        'usuarios' =>['Lucas','João','Mateus']
      ]);
    }
}
