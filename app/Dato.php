<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    //
    protected $table = "datos";

    protected $fillable = ['id','foto','nombre','apellido','telefono1','telefono2','direccion','email'];

    public function user(){
    	return $this->hasMany('App\User');
    }

}
