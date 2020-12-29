<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama','description','date_created',
        'photo','museum_id','artist_id','type_id','article_id'
    ];

    protected $guarded = [];

    

    public function museum(){
        return $this->belongsTo(Museum::class, 'museum_id','id');
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id','id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id','id');
    }

    public function article(){
        return $this->belongsTo(Article::class, 'article_id','id');
    }
}
