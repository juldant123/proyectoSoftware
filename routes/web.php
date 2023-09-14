<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

/* Anterior ruta general de laravel
Route::get('/', function () {
    return view('welcome');
     /*return "Bienvenido a la pagina principal";
});
*/

//nueva ruta por defecto de laravel, usando controllador
Route::get('/', HomeController::class);

//Nuevas rutas para la gestion de practicas

Route::controller(PracticaController::class)->group(function(){
    Route::get('practicas',[PracticaController::class, 'index']);
    Route::get('practicas/create',[PracticaController::class, 'create']);
    Route::get('practicas/{procedimiento}',[PracticaController::class, 'show']);

});



/*
//Agregando nueva ruta
Route::get('practicas', function(){
    /*return "Bienvenido a la Gestion de Practicas Preprofesionales";
    return "Bienvenido a la pagina principal de practicas preprofesionales";
});

//Agregando nueva ruta para CREAR un nuevo registro
Route::get('practicas/create', function(){
    return "En esta pagina podras crear un nuevo registro. ";
    return "En esta pagina registraras a los practicantes. ";
});

//Agregando nueva ruta con variable
Route::get('practicas/{procedimiento}', function($procedimiento){
    return "Bienvenido al procedimiento: $procedimiento";
});

//Agregando nueva ruta con 2 variables
Route::get('practicas/{procedimiento}/{registro}', function ($procedimiento, $registro) {
    return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
});

//Mejorando el codigo con las rutas: 1 variable y 2 variables

Route::get('practicas/{procedimiento}/{registro?}', function($procedimiento,$registro = null){
    if($registro){ //condicional si se indica un registro
        return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
    } else {       //en caso no se indique un registro
        return "Bienvenido al procedimiento: $procedimiento";  
    }
});

Route::get('practicas/{registro}/{practicante?}', function($registro,$practicante = null){
    if($practicante){ //condicional si se indica un registro
        return "Bienvenido al registro: $registro, del practicante $practicante";
    } else {       //en caso no se indique un registro
        return "Bienvenido al registro: $registro";  
    }
});
*/



