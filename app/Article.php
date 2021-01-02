<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name','description',
        'museum_id'
    ];

    protected $guarded = [];

    public function museum(){
        return $this->belongsTo(Museum::class, 'museum_id','id');
    }

    

}
