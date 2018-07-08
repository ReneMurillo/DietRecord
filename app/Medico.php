<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = "medicos";

    protected $fillable = ['nombre_completo', 'especialidad', 'licencia', 'id_consultorio'];

    public function tratamientos(){
    	return $this->hasMany('App\Tratamiento', 'id_medico', 'id');
    }

    public function citas(){
    	return $this->hasMany('App\Cita', 'id_medico', 'id');
    }

    public function consultorio(){
    	return $this->belongsTo('App\Consultorio', 'id_consultorio', 'id');
    }
}
