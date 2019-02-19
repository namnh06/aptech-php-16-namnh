<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'category_id'];
    public function getTitleAttribute($value)
    {
        //uppercase first
        return ucfirst($value . ' whoops');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}