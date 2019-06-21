<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{

    protected $fillable= ['name', 'genre_id', 'description'];
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
}
