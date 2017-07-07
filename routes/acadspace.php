<?php
/**
 * Espacios Académicos
 */

//RUTA DE EJEMPLO
Route::get('/', [
    'as' => 'espacios.academicos.index',
    'uses' => function(){
        return view('acadspace.example');
    }
]);

$controller = "\\App\\Container\\Acadspace\\src\\Controllers\\";


Route::resource('espacad', $controller.'SolicitudController', [   //ruta para el CRUD de empleados
    'names' => [ // 'método' => 'alias'
        'create' => 'espacios.academicos.espacad.create',
        'store' => 'espacios.academicos.espacad.store',
        'index' => 'espacios.academicos.espacad.index',
        'edit' => 'espacios.academicos.espacad.edit',
        'update' => 'espacios.academicos.espacad.update',
        'destroy' => 'espacios.academicos.espacad.destroy',
    ]
]);

Route::get('/solicitudesLista', [    //ruta para listar los docentes registrados.
    'as' => 'espacios.academicos.mostrarSolicitudes', //Este es el alias de la ruta
    'uses' => $controller.'SolicitudController@listarSolicitud'
]);
