<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;
use Laracasts\Flash\Flash;
use App\Cita;
use App\Tratamiento;

class ExpedientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expediente = Expediente::orderBy('id', 'ASC')->paginate(10);

        return view('admin.expedientes.index')->with('expediente', $expediente);
    }

    
    public function show($id)
    {
        $citas = Cita::searchusuario($id)->get();
        $tratamiento = Tratamiento::search($id)->get();
        
        $tratamiento->each(function ($tratamiento){

            $tratamiento->citas;
    });
        $citas->each(function ($citas){

            $citas->medicos;
            $citas->usuarios;
    });
        
       return view('admin.expedientes.show')->with('tratamiento', $tratamiento)->with('citas', $citas);
    }
        
    
}
