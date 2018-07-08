<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlimentosRequest;
use App\Alimento_ingerido;
use App\User;
use Laracasts\Flash\Flash;

class AlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alimentos = Alimento_ingerido::with('usuarios')->orderBy('id', 'ASC')->paginate(10);

        return view('admin.alimentos.index')->with('alimentos', $alimentos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlimentosRequest $request)
    {
        $alimento = new Alimento_ingerido($request->all());
        $alimento->save();

        Flash::success('El alimento ' . $alimento->nombre . ' se registró correctamente');
        return redirect()->route('alimentos.index');
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
        $alimento = Alimento_ingerido::find($id);
        return view('admin.alimentos.edit')->with('alimento', $alimento);
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
        $alimento = Alimento_ingerido::find($id);
        $alimento->fill($request->all());
        $alimento->save();

        Flash::info('El alimento ' . $alimento->nombre . ' se modificó con éxito');
        return redirect()->route('alimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = Alimento_ingerido::find($id);
        $alimento->delete();

        Flash::error('El usuario fue eliminado correctamente');
        return redirect()->route('alimentos.index');
    }
}
