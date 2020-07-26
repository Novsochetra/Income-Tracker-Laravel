<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'amount', 'description', 'categories_id'];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
