<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name',
        'color',
        'description'
    ];

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
}
