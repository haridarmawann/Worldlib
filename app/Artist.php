<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name','description','birth_time','dead_time'
    ];
    protected $guarded = [];
}
