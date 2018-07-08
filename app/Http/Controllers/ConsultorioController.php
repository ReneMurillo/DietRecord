<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultorio;
use Laracasts\Flash\Flash;
use App\Http\Requests\ConsultorioRequest;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultorio = Consultorio::orderBy('id', 'ASC')->paginate(5);

        return view('admin.consultorios.index')->with('consultorio', $consultorio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consultorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultorioRequest $request)
    {
        $consultorio = new Consultorio($request->all());
        $consultorio->save();

        Flash::success('El consultorio ' . $consultorio->nombre . ' se registró correctamente');
        return redirect()->route('consultorios.index');
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
        $consultorio = Consultorio::find($id);
        return view('admin.consultorios.edit')->with('consultorio', $consultorio);
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
        $consultorio = Consultorio::find($id);
        $consultorio->fill($request->all());
        $consultorio->save();

        Flash::success('Consultorio modificado con éxito');
        return redirect()->route('consultorios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultorio = Consultorio::find($id);
        $consultorio->delete();

        Flash::warning('El consultorio fue eliminado');
        return redirect()->route('consultorios.index');
    }
}
