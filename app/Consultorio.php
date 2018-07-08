<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    protected $table = "consultorios";

    protected $fillable = ['nombre', 'direccion'];


    public function medicos(){
    	return $this->hasMany('App\Medico', 'id_consultorio', 'id');
    }

    public function citas(){
    	return $this->hasMany('App\Cita', 'id_consultorio', 'id');
    }
}
