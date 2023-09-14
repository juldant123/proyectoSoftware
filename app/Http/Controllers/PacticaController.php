<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacticaController extends Controller
{
    //metodo para la pagina principal de Gestion de Practicas
    public function index() {
        return "Bienvenido a la Gestion de Practicas Preprofesionales";

    }
    //metodo para crear un nuevo registro de practicante 
    public function create(){
        return "En esta pagina podra crear un nuevo registro";

    }

    //metodo para mostrar los detalles del registro
    public function show($procedimiento){
        return "Bienvenido al procedimiento: $procedimiento";

    }
}
