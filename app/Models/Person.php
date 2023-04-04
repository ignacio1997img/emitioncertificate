<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'people';

    protected $fillable = [
        'ci',
        'first_name',
        'last_name',
        'institution',
        'age',
        'gender',
        'deleted_at',
        'phone',
        'status'
    ];
}
