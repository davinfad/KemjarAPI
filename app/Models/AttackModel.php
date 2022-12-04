<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttackModel extends Model
{

    protected $table = 'attack';
    
    protected $fillable = [
        'email','password'
    ];
}