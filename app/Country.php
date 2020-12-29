<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_name','country_description',
        'country_image'
    ];

    protected $guarded = [];

    protected $table = 'countries';

    public function museum(){
        return $this->hasMany(Museum::class,'country_id','id');
    }

    public function article(){
        return $this->hasMany(Article::class, 'museum_id','id');
    }
}
