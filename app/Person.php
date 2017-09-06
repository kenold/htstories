<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model 
{

    protected $table = 'people';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'photo_path', 'company', 'job_title', 'sex', 'place_origin', 'bio', 'slug');

    public function story()
    {
        return $this->hasOne('App\Story');
    }

    public function links()
    {
        return $this->hasMany('App\Link');
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

}