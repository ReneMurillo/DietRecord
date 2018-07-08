<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicoRequest;
use Laracasts\Flash\Flash;
use App\Cita;
use Carbon\Carbon;
use App\Consultorio;
use App\Medico;
use App\User;
use App\Http\Requests\CitasRequest;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $citas = Cita::with('medicos')->with('usuarios')->with('consultorio')->get();

        return view('admin.citas.index')->with('citas', $citas);


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $usuario = User::buscarid($id)->first();

        $consultorios = Consultorio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $medicos = Medico::orderBy('nombre_completo', 'ASC')->pluck('nombre_completo', 'id');
        return view('admin.citas.create')->with('consultorios', $consultorios)->with('medicos', $medicos)->with('usuario', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita($request->all());
        $cita->fecha = Carbon::createFromFormat('Y-m-d', $cita->fecha);
        $cita->save();

        Flash::success('La cita se registró correctamente');
        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citas = Cita::searchusuario($id)->get();
        $citas->each(function ($citas){

            $citas->medicos;
            $citas->consultorios;
            $citas->usuarios;
    });
        
        return view('admin.citas.show')->with('citas', $citas);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);
        $consultorios = Consultorio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $medicos = Medico::orderBy('nombre_completo', 'ASC')->pluck('nombre_completo', 'id');
        return view('admin.citas.edit')->with('cita', $cita)->with('consultorios', $consultorios)->with('medicos', $medicos);
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
        $cita = Cita::find($id);
        $cita->fill($request->all());
        $cita->save();

        Flash::success('Cita modificada con éxito');
        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        Flash::warning('La cita fue eliminada con éxito');
        return redirect()->route('citas.index');
    }
}
