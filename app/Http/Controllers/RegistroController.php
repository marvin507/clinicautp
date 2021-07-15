<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class RegistroController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registrar(Request $request)
    {
        Registro::create($request->all());
    }

    public function ver()
    {
        $registros = Registro::all();

        foreach ($registros as $key => $value) {
            echo $value;
        }
    }
}
