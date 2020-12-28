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
}
