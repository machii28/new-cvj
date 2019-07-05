<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createUserM extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $table = 'account';
    public $timestamps = false;
}
