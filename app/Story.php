<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model 
{

    protected $table = 'stories';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('date', 'cover_path', 'summary', 'content', 'video_url', 'video_embed', 'audio_url', 'audio_embed', 'language');

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}