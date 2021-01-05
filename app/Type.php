<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type'
    ];
    protected $guarded = [];

    public function item(){
        return $this->hasMany(Item::class, 'type_id','id');
    }
    
}
