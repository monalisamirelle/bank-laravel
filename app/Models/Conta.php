<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';

    protected $fillable = [
        'agencia',
        'numero_conta',
        'titular',
        'saldo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    public $timestamps = false;
    
}
