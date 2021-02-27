<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table= 'posts';

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
