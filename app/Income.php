<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['name', 'amount', 'description', 'categories_id'];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
