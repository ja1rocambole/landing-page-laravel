<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        $variavel = 'Sou uma variável vinda do controller';
        $lista = ['PHP', 'Laravel', 'JavaScript'];

        return view('page', ['variavel' => $variavel, 'lista' => $lista]);
    }
}
