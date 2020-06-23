<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primarey_key = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
