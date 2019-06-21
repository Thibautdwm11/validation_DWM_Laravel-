<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function Piano(){
        return $this->hasMany('App\piano');
    }
}
