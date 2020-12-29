<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $fillable = [
        'country_id','name','description','city','logo'
    ];

    protected $hidden=[
        
    ];
    protected $table = 'museums';
    
    public function country(){
        return $this->belongsTo(Country::class, 'country_id','id');
    }

    public function item()
    {
        return $this->hasMany(Item::class, 'museum_id','id');
    }

    public function article(){
        return $this->hasMany(Article::class, 'museum_id','id');
    }
}
