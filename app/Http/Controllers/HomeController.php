<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Que paso mi niño que miras";
        return view('home.index')->with("viewData", $viewData);
    }

    function about() {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Este es el subtitulo";
        $viewData["description"] = "Esta es la descripción";
        $viewData["author"] = "Carlos";
        return view('home.about')->with("viewData", $viewData);
    }
}
