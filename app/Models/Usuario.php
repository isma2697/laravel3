<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'usuarios';
    protected $dates = ['deleted_at'];

    public $timestamps = false;
}
