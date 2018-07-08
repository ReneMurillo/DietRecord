<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Alimento_ingerido;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function searchUser($id){
        $alimentos = Alimento_ingerido::search($id)->get();

        $alimentos->each(function ($alimentos){

        $alimentos->usuarios;

    });

        return view('admin.alimentos.search')->with('alimentos', $alimentos);
    }
}

    