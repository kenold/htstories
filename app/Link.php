<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model 
{

    protected $table = 'links';
    public $timestamps = true;
    protected $fillable = array('label', 'url');

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

}