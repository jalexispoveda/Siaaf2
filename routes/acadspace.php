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

Route::resource('est', $controller.'EstudiantesController', [   //ruta para el CRUD de empleados
    'names' => [ // 'método' => 'alias'
        'create' => 'espacios.academicos.est.create',
        'store' => 'espacios.academicos.est.store',
        'index' => 'espacios.academicos.est.index',
        'edit' => 'espacios.academicos.est.edit',
        'update' => 'espacios.academicos.est.update',
        'destroy' => 'espacios.academicos.est.destroy',
    ]
]);

