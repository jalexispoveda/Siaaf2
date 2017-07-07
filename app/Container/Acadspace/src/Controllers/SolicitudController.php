<?php
/**
 * Created by PhpStorm.
 * User: Yeison Gomez
 * Date: 19/06/2017
 * Time: 2:20 PM
 */

namespace App\Container\Acadspace\src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Users\Src\Interfaces\UserInterface;
use App\Container\Acadspace\src\Solicitud;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Estoy en Index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acadspace.registroSolicitud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return "Aqui refirige";
        Solicitud::create([
 //           'PK_PRSN_Cedula'          => $request['PK_PRSN_Cedula' ],
            'SOL_guia_practica'       => $request['SOL_ReqGuia'],
            'SOL_software'            => $request['SOL_ReqSoft']
            'S'          => $request['PRSN_Apellidos'],
            'PRSN_Telefono'           => $request['PRSN_Telefono'],
            'PRSN_Correo'             => $request['PRSN_Correo'],
            'PRSN_Direccion'          => $request['PRSN_Direccion'],
            'PRSN_Ciudad'             => $request['PRSN_Ciudad'],
            'PRSN_Eps'                => $request['PRSN_Eps'],
            'PRSN_Fpensiones'         => $request['PRSN_Fpensiones'],
            'PRSN_Area'               => $request['PRSN_Area'],
            'PRSN_Caja_Compensacion'  => $request['PRSN_Caja_Compensacion'],
            'PRSN_Estado_Persona'     => $request['PRSN_Estado_Persona']
        ]);
        return back()->with('success','Solicitud registrada correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return "en el show";
       // return view('humtalent.empleado.consultaEmpleado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}