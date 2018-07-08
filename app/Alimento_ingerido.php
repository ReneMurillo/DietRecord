<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento_ingerido extends Model
{
    protected $table = "alimentos_ingeridos";

    protected $fillable = ['id_usuario', 'nombre', 'proporcion', 'created_at'];

    public function usuarios(){
    	return $this->belongsTo('App\User', 'id_usuario');
    }

    public function scopeSearch($query, $id){
        return $query->where('id_usuario', '=', $id);
    }
}
