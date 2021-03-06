<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    protected $fillable = [
        'name',
        'color',
        'description'
    ];

    use SoftDeletes;

    public function incomes()
    {
        return $this->hasMany('App\Income');
    }
}
