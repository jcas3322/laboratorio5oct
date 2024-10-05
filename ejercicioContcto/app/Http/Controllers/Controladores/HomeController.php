<?php

namespace App\Http\Controllers\Controladores;

use App\Cruds\CRUDContacto\ContactoCrud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(ContactoCrud $crudContacto)
    {
        $data = $crudContacto->listAll();
        return view('home.index', compact('data'));
    }
}
