<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tratamiento;
use Laracasts\Flash\Flash;
use App\Medico;
use App\Cita;

class TratamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tratamiento = Tratamiento::with('users')->orderBy('id', 'ASC')->paginate(10);

        return view('admin.tratamientos.index')->with('tratamientos', $tratamiento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cita = Cita::search($id)->first();
        $cita->usuarios;
        $medicos = Medico::orderBy('nombre_completo', 'ASC')->pluck('nombre_completo', 'id');
        return view('admin.tratamientos.create')->with('cita', $cita)->with('medicos', $medicos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tratamiento = new Tratamiento($request->all());
        $tratamiento->save();

        Flash::success('El tratamiento se registró correctamente');
        return redirect()->route('tratamientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $tratamientos = Tratamiento::search($id)->get();

        $tratamientos->each(function ($tratamientos){

            $tratamientos->medicos;

    });
        
        return view('admin.tratamientos.show')->with('tratamientos', $tratamientos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicos = Medico::orderBy('nombre_completo', 'ASC')->pluck('nombre_completo', 'id');
        $tratamiento = Tratamiento::find($id);
        return view('admin.tratamientos.edit')->with('tratamiento', $tratamiento)->with('medicos', $medicos);
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
        $tratamiento = Tratamiento::find($id);
        $tratamiento->fill($request->all());
        $tratamiento->save();

        Flash::success('Tratamiento modificado con éxito');
        return redirect()->route('tratamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tratamiento = Tratamiento::find($id);
        $tratamiento->delete();

        Flash::warning('El tratamiento fue eliminado con éxito');
        return redirect()->route('tratamientos.index');
    }
}
