<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $table='categories';
    protected $fillable=['nom_cat'];
    public function post() {

        return $this->hasMany('App\Post');
    }
}
