<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public static $products;

    public function insert() {
        ProductController::$products[0] = array(
            "id" => 0,
            "name" => "Consola",
            "description" => "PlayStation 5 con todos los juegos del mundo",
            "image" => asset('img/game.png'),
            "price" => 400.60,
        );
        ProductController::$products[1] = array(
            "id" => 1,
            "name" => "Submarino",
            "description" => "Un submarino pequeñito",
            "image" => asset('img/submarine.png'),
            "price" => 1000,
        );
        ProductController::$products[2] = array(
            "id" => 2,
            "name" => "Caja",
            "description" => "Una caja altamente de seguridad",
            "image" => asset('img/safe.png'),
            "price" => 10.89,
        );
        ProductController::$products[3] = array(
            "id" => 3,
            "name" => "Mando PSP",
            "description" => "Un mando para controlarlos a todos",
            "image" => asset('img/productos.png'),
            "price" => 150.30,
        );
    }

    function index() {
        $this-> insert();
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";
        $viewData["subtitle"] = "Los productos";
        $viewData['products'] = ProductController::$products;
        return view('products.index')->with("viewData", $viewData);
    }

}
