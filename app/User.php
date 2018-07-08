<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

    protected $fillable = ['nombre_completo', 'fecha_nacimiento', 'genero', 'tipo', 'username', 'password', 'telefono', 'celular', 'correo', 'direccion', 'dui'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function alimentos_ingeridos(){
        return $this->hasMany('App\Alimento_ingerido', 'id_usuarios', 'id');
    }

    public function citas(){
        return $this->hasMany('App\Cita', 'id_usuario', 'id');
    }

    public function tratamientos(){
        return $this->hasMany('App\Tratamiento', 'id_usuario', 'id');
    }

    public function scopeSearch($query, $name){
        return $query->where('nombre_completo', 'LIKE', "%$name%");
    }

    public function scopeBuscar($query){
        return $query->where('tipo', '=', 'Paciente');
    }

    public function scopeBuscarid($query, $id){
        return $query->where('id', '=', $id);
    }
}
