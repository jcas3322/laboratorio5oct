<?php

namespace App\Http\Controllers\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcercaDeController extends Controller
{
    public function index(){
        return view('acercade.index');
    }
}
