<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(string $categoria, string $nome) 
    {
        return view('details', 
        compact('categoria', 'nome')
        );
    }
}
