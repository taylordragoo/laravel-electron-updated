<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $conection = 'sqlite';

    protected $table = 'counter';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'count'
    ];
}
