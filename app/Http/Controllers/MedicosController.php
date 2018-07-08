<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Http\Requests\MedicoRequest;
use Laracasts\Flash\Flash;
use App\Consultorio;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $medico = Medico::orderBy('id', 'ASC')->paginate(10);

        return view('admin.medicos.index')->with('medicos', $medico);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultorios = Consultorio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view('admin.medicos.create')->with('consultorios', $consultorios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico($request->all());
        $medico->save();

        Flash::success('El médico ' . $medico->nombre_completo . ' se registró correctamente');
        return redirect()->route('medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultorios = Consultorio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $medico = Medico::find($id);
        $medico->consultorio;
        return view('admin.medicos.edit')->with('medico', $medico)->with('consultorios', $consultorios);
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
        $medico = Medico::find($id);
        $medico->fill($request->all());
        $medico->save();

        Flash::success('Médico modificado con éxito');
        return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::find($id);
        $medico->delete();

        Flash::warning('El médico fue eliminado con éxito');
        return redirect()->route('medicos.index');
    }
}
