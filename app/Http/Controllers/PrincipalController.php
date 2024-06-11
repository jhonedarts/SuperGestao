<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
