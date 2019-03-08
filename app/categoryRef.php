<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryRef extends Model
{
    //
    public $primaryKey = 'id';
    public $incrementing = false;
    public $table = 'category_ref';
    public $timestamps = false;
    public $fillable = [
    	'id', 'categoryName'
    ];
}
