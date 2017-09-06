<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model 
{

    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable = array('name', 'slug');

    public function stories()
    {
        return $this->hasMany('App\Story');
    }

}