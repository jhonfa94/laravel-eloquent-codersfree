<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    // protected $table = 'destinations'; # DEFINIENDO TABLA

    // protected $primaryKey = 'id'; # ESTABLECIENDO EL PRIMARY KEY

    protected $attributes = [
        'name' => 'Lima'
    ];
}
