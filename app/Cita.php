<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cita extends Model
{
    protected $table = "citas";

    protected $fillable = ['id_usuario', 'fecha', 'hora', 'causa', 'id_medico', 'id_consultorio', 'diagnostico'];

    public function usuarios(){
    	return $this->belongsTo('App\User', 'id_usuario');
    }

    public function medicos(){
    	return $this->belongsTo('App\Medico', 'id_medico');
    }

    public function consultorio(){
    	return $this->belongsTo('App\Consultorio', 'id_consultorio');
    }

    public function tratamientos(){
        return $this->hasMany('App\Tratamiento', 'id_cita', 'id');
    }

    public function scopeSearch($query, $id){
        return $query->where('id', '=', $id);
    }

     public function scopeSearchusuario($query, $id){
        return $query->where('id_usuario', '=', $id);
    }

}
