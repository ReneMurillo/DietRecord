<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = "tratamientos";

    protected $fillable = ['id_usuario', 'id_medico', 'id_cita', 'medicamento', 'tomar', 'frecuencia', 'tiempo', 'indicaciones'];

    public function users(){
    	return $this->belongsTo('App\User', 'id_usuario', 'id');
    }

    public function medicos(){
    	return $this->belongsTo('App\Medico', 'id_medico', 'id');
    }

    public function citas(){
    	return $this->belongsTo('App\Cita', 'id_cita', 'id');
    }

    public function scopeSearch($query, $id){
        return $query->where('id_usuario', '=', $id);
    }
}
