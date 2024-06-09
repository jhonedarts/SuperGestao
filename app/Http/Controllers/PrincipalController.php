<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(Request $request)
    {
        return view('site.principal');
    }
}
